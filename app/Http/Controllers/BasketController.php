<?php

namespace App\Http\Controllers;

use App\Classes\Basket;
use App\Http\Requests\AddCouponRequest;
use App\Http\Requests\BasketRequest;
use App\Models\Coupon;
use App\Models\Sku;
use CdekSDK2\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function basket()
    {
        $order = (new Basket())->getOrder();
        return view('basket', compact('order'));
    }

    public function basketAdd(Sku $skus)
    {
        $result = (new Basket(true))->addSku($skus);
        if($result){
            session()->flash('success', 'Продукция добавлена ' . $skus->product->title);
        } else {
            session()->flash('warning', 'Продукция' . $skus->product->title . ' недоступна');
        }
        return redirect()->route('basket');
    }

    public function basketRemove(Sku $skus){
        (new Basket())->removeSku($skus);

        session()->flash('warning', 'Удалена продукция ' . $skus->product->title);
        return redirect()->route('basket');
    }

    public function order()
    {
        $basket = new Basket();
        $order = $basket->getOrder();
        if(!$basket->countAvailable()){
            session()->flash('warning', 'Продукция недоступна в полном объеме');
            return redirect()->route('basket');
        }

        return view('order', compact('order'));
    }

    public function orderConfirm(BasketRequest $request)
    {
        $basket = new Basket();

        if($basket->getOrder()->hasCoupon() && !$basket->getOrder()->coupon->availableForUse()){
            $basket->clearCoupon();
            session()->flash('warning', 'Купон недоступен');
            return redirect()->route('basket');
        }

        $email = Auth::check() ? Auth::user()->email : $request->email;

        if($basket->saveOrder($request->name, $request->phone, $email, $request->type_address, $request->address,
            $request->comment, $request->type_payment)){
            session()->flash('success', 'Заказ в процессе');
        } else {
            session()->flash('warning', 'Заказ недоступен');
        }

        return redirect()->route('index');
    }

    public function setCoupon(AddCouponRequest $request){
        $coupon = Coupon::where('code', $request->coupon)->first();
        if($coupon->availableForUse()){
            (new Basket())->setCoupon($coupon);
            session()->flash('success', 'Купон добавлен');
        }
        else {
            session()->flash('warning', 'Купон был использован');
        }

        return redirect()->route('basket');
    }

    public function resetBasket(Request $request){
        $request->session()->forget('order');
        session()->flash('success', 'Корзина очищена');
        return redirect()->route('index');
    }

}

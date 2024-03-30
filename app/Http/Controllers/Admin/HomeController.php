<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Client;
use App\Models\Coupon;
use App\Models\Delivery;
use App\Models\Faq;
use App\Models\Home;
use App\Models\Order;
use App\Models\Product;
use http\Client\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $categories = Category::get();
        $brands = Brand::get();
        $product = Product::get();
        $order = Order::get();
        $coupon = Coupon::get();
        $homes = Home::get();
        $clients = Client::get();
        $deliveries = Delivery::get();
        $faqs = Faq::get();
        return view('auth.homes.index',
            compact('user', 'categories', 'product', 'order', 'coupon', 'homes', 'clients', 'faqs', 'deliveries', 'brands'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        return view('auth.homes.form', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HomeRequest $request, Home $home)
    {
        $params = $request->all();
        $home->update($params);
        session()->flash('success', 'Oбновленo');
        return redirect()->route('homes.index');
    }

}

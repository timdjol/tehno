<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Order extends Model
{
    protected $fillable = ['user_id', 'sum', 'coupon_id', 'name', 'phone', 'email', 'label'];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count', 'price')->withTimestamps();
    }


    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function calculateFullSum()
    {
        $sum = 0;
        foreach ($this->products()->withTrashed()->get() as $product) {
            $sum += $product->getPriceForCount();
        }
        return $sum;
    }
    public function getFullSum()
    {
        /* подсчет суммы в валюте заказа */
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->price * $product->countInOrder;
        }


        return $sum;

    }

    public function saveOrder($name, $phone, $type_address, $address, $comment, $type_payment)
    {

        $this->phone = $phone;
        $this->name = $name;
        $this->type_address = $type_address;
        $this->address = $address;
        $this->comment = $comment;
        $this->type_payment = $type_payment;
        $this->status = 1;
        $this->label = 'В процессе';
        $this->sum = $this->getFullSum();
        $products = $this->products;
        $this->save();

        foreach ($products as $productInOrder) {
            $this->products()->attach($productInOrder, [
                'count' => $productInOrder->countInOrder,
                'price' => $productInOrder->price,
            ]);
        }
        session()->forget('order');
        return true;
    }

    public function hasCoupon()
    {
        return $this->coupon;
    }

    public function showDate(){
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d/m/Y H:i');
    }
}

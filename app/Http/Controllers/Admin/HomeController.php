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
use App\Models\Form;
use App\Models\Home;
use App\Models\Order;
use App\Models\Product;
use App\Models\Subcategory;
use http\Client\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Auth::user();
        $categories = Category::get();
        $subcategories = Subcategory::get();
        $brands = Brand::get();
        $products = Product::get();
        $orders = Order::get();
        $coupons = Coupon::get();
        $homes = Home::get();
        $clients = Client::get();
        $deliveries = Delivery::get();
        $forms = Form::get();
        $faqs = Faq::get();
        return view('auth.homes.index',
            compact('users', 'categories', 'subcategories', 'forms', 'products', 'orders', 'coupons', 'homes', 'clients',
                'faqs', 'deliveries',
                'brands'));
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

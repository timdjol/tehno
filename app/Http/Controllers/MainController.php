<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsFilterRequest;
use App\Http\Requests\SubscriptionRequest;
use App\Mail\ContactMail;
use App\Mail\FormMail;
use App\Mail\TravelMail;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Client;
use App\Models\Currency;
use App\Models\Delivery;
use App\Models\Form;
use App\Models\Home;
use App\Models\Image;
use App\Models\Order;
use App\Models\Product;
use App\Models\Faq;
use App\Models\Sku;
use App\Models\Slider;
use App\Models\Subcategory;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index()
    {
        $homes = Home::get();
        $clients = Client::get();
        $deliveries = Delivery::get();
        $faqs = Faq::get();
        return view('index', compact('homes', 'clients', 'deliveries', 'faqs'));
    }

    public function catalog(ProductsFilterRequest $request)
    {
        $productsQuery = Product::with(['category']);

        if ($request->filled('price_from')) {
            $productsQuery->where('price', '>=', $request->price_from);
        }

        if ($request->filled('price_to')) {
            $productsQuery->where('price', '<=', $request->price_to);
        }


        if ($request->filled('height')) {
            $productsQuery->where('height', $request->height);
        }

        if ($request->filled('width')) {
            $productsQuery->where('width', $request->width);
        }

//        foreach (['type', 'camera'] as $field) {
//            if ($request->has($field)) {
//                $skusQuery->whereHas('product', function ($query) use ($field)
//                {
//                    $query->$field();
//                });
//            }
//        }
        $products = $productsQuery->orderby('updated_at', 'desc')->paginate(20)->withPath("?".$request->getQueryString
            ());

        $product = Product::get();

        return view('catalog', compact('products', 'product'));
    }

    public function categories()
    {
        $categories = Category::all();
        return view('categories', compact('categories'));
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();

        return view('category', compact('category'));
    }

    public function subcategory($code)
    {
        $subcategory = Subcategory::where('code', $code)->first();
        $products = Product::all();


        return view('subcategory', compact('subcategory', 'products'));
    }

    public function brands()
    {
        $brands = Brand::all();
        return view('brands', compact('brands'));
    }

    public function brand($code)
    {
        $brand = Brand::where('code', $code)->first();
        return view('brand', compact('brand'));
    }

    public function product($category, $productCode)
    {
        $product = Product::withTrashed()->byCode($productCode)->firstOrFail();
        $images = Image::where('product_id', $product->id)->get();

        //related

        return view('product', compact('product', 'images'));
    }

    public function form_mail(Request $request)
    {
        $params = $request->all();
        Form::create($params);
        Mail::to('laravel@timdjol.com')->send(new FormMail($request));
        return redirect()->route('index');
    }

    public function order_mail(Request $request)
    {
        $params = $request->all();
        Order::create($params);
        Mail::to('info@tehnosklad.kg')->send(new OrderMail($request));
        return redirect()->route('categorytravel');
    }

    public function search()
    {
        $title = $_GET['search'];
        $search = Product::query()
            ->where('title', 'like', '%'.$title.'%')
            ->get();
        return view('search', compact('search'));
    }


}

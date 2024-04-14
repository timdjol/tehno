<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(40);
        return view('auth.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        //$properties = Property::get();
        return view('auth.products.form', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request, Product $product)
    {
        $request['code'] = Str::slug($request->title);
        $params = $request->all();
        unset($params['image']);
        if($request->has('image')){
            if($product->image != null) {
                Storage::delete($product->image);
            }
            $params['image'] = $request->file('image')->store('products');
        }
        unset($params['imagecolor1']);
        if($request->has('imagecolor1')){
            if($product->imagecolor1 != null) {
                Storage::delete($product->imagecolor1);
            }
            $path = $request->file('imagecolor1')->store('colors');
            $params['imagecolor1'] = $path;
        }

        unset($params['imagecolor2']);
        if($request->has('imagecolor2')){
            if($product->imagecolor2 != null) {
                Storage::delete($product->imagecolor2);
            }
            $path = $request->file('imagecolor2')->store('colors');
            $params['imagecolor2'] = $path;
        }

        unset($params['imagecolor3']);
        if($request->has('imagecolor3')){
            if($product->imagecolor3 != null) {
                Storage::delete($product->imagecolor3);
            }
            $path = $request->file('imagecolor3')->store('colors');
            $params['imagecolor3'] = $path;
        }

        unset($params['imgvant1']);
        if($request->has('imgvant1')){
            if($product->imgvant1 != null) {
                Storage::delete($product->imgvant1);
            }
            $path = $request->file('imgvant1')->store('vantages');
            $params['imgvant1'] = $path;
        }
        unset($params['imgvant2']);
        if($request->has('imgvant2')){
            if($product->imgvant2 != null) {
                Storage::delete($product->imgvant2);
            }
            $path = $request->file('imgvant2')->store('vantages');
            $params['imgvant2'] = $path;
        }
        unset($params['imgvant3']);
        if($request->has('imgvant3')){
            if($product->imgvant3 != null) {
                Storage::delete($product->imgvant3);
            }
            $path = $request->file('imgvant3')->store('vantages');
            $params['imgvant3'] = $path;
        }
        unset($params['imgvant4']);
        if($request->has('imgvant4')){
            if($product->imgvant4 != null) {
                Storage::delete($product->imgvant4);
            }
            $path = $request->file('imgvant4')->store('vantages');
            $params['imgvant4'] = $path;
        }


        unset($params['imagedescr1']);
        if($request->has('imagedescr1')){
            if($product->imagedescr1 != null) {
                Storage::delete($product->imagedescr1);
            }
            $path = $request->file('imagedescr1')->store('products');
            $params['imagedescr1'] = $path;
        }

        unset($params['imagedescr2']);
        if($request->has('imagedescr2')){
            if($product->imagedescr2 != null) {
                Storage::delete($product->imagedescr2);
            }
            $path = $request->file('imagedescr2')->store('products');
            $params['imagedescr2'] = $path;
        }

        unset($params['imagedescr3']);
        if($request->has('imagedescr3')){
            if($product->imagedescr3 != null) {
                Storage::delete($product->imagedescr3);
            }
            $path = $request->file('imagedescr3')->store('products');
            $params['imagedescr3'] = $path;
        }

        unset($params['imagedescr4']);
        if($request->has('imagedescr4')){
            if($product->imagedescr4 != null) {
                Storage::delete($product->imagedescr4);
            }
            $path = $request->file('imagedescr4')->store('products');
            $params['imagedescr4'] = $path;
        }

        unset($params['imagedescr5']);
        if($request->has('imagedescr5')){
            if($product->imagedescr5 != null) {
                Storage::delete($product->imagedescr5);
            }
            $path = $request->file('imagedescr5')->store('products');
            $params['imagedescr5'] = $path;
        }

        unset($params['imagedescr6']);
        if($request->has('imagedescr6')){
            if($product->imagedescr6 != null) {
                Storage::delete($product->imagedescr6);
            }
            $path = $request->file('imagedescr6')->store('products');
            $params['imagedescr6'] = $path;
        }

        unset($params['imagedescr7']);
        if($request->has('imagedescr7')){
            if($product->imagedescr7 != null) {
                Storage::delete($product->imagedescr7);
            }
            $path = $request->file('imagedescr7')->store('products');
            $params['imagedescr7'] = $path;
        }

        //images
        $prod = Product::create($params);

        $images = $request->file('images');
        if ($request->hasFile('images')) :
            foreach ($images as $image):
                $image = $image->store('products');
                DB::table('images')->insert(
                    array(
                        'image'=>  $image,
                        'product_id' => $prod->id,
                    )
                );
            endforeach;
        endif;

        session()->flash('success', 'Продукция ' . $request->title . ' добавлена');
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $images = Image::where('product_id', $product->id)->get();
        return view('auth.products.show', compact('product', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $images = Image::where('product_id', $product->id)->get();
        return view('auth.products.form', compact('product', 'categories', 'images', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     * @param ProductRequest $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(ProductRequest $request, Product $product)
    {
        $request['code'] = Str::slug($request->title);
        $params = $request->all();
        //dd($params);

        unset($params['image']);
        if($request->has('image')){
            if($product->image != null) {
                Storage::delete($product->image);
            }
            $path = $request->file('image')->store('products');
            $params['image'] = $path;
        }

        unset($params['imagecolor1']);
        if($request->has('imagecolor1')){
            if($product->imagecolor1 != null) {
                Storage::delete($product->imagecolor1);
            }
            $path = $request->file('imagecolor1')->store('colors');
            $params['imagecolor1'] = $path;
        }

        unset($params['imagecolor2']);
        if($request->has('imagecolor2')){
            if($product->imagecolor2 != null) {
                Storage::delete($product->imagecolor2);
            }
            $path = $request->file('imagecolor2')->store('colors');
            $params['imagecolor2'] = $path;
        }

        unset($params['imagecolor3']);
        if($request->has('imagecolor3')){
            if($product->imagecolor3 != null) {
                Storage::delete($product->imagecolor3);
            }
            $path = $request->file('imagecolor3')->store('colors');
            $params['imagecolor3'] = $path;
        }

        unset($params['imgvant1']);
        if($request->has('imgvant1')){
            if($product->imgvant1 != null) {
                Storage::delete($product->imgvant1);
            }
            $path = $request->file('imgvant1')->store('vantages');
            $params['imgvant1'] = $path;
        }
        unset($params['imgvant2']);
        if($request->has('imgvant2')){
            if($product->imgvant2 != null) {
                Storage::delete($product->imgvant2);
            }
            $path = $request->file('imgvant2')->store('vantages');
            $params['imgvant2'] = $path;
        }
        unset($params['imgvant3']);
        if($request->has('imgvant3')){
            if($product->imgvant3 != null) {
                Storage::delete($product->imgvant3);
            }
            $path = $request->file('imgvant3')->store('vantages');
            $params['imgvant3'] = $path;
        }
        unset($params['imgvant4']);
        if($request->has('imgvant4')){
            if($product->imgvant4 != null) {
                Storage::delete($product->imgvant4);
            }
            $path = $request->file('imgvant4')->store('vantages');
            $params['imgvant4'] = $path;
        }

        unset($params['imagedescr1']);
        if($request->has('imagedescr1')){
            if($product->imagedescr1 != null) {
                Storage::delete($product->imagedescr1);
            }
            $path = $request->file('imagedescr1')->store('products');
            $params['imagedescr1'] = $path;
        }

        unset($params['imagedescr2']);
        if($request->has('imagedescr2')){
            if($product->imagedescr2 != null) {
                Storage::delete($product->imagedescr2);
            }
            $path = $request->file('imagedescr2')->store('products');
            $params['imagedescr2'] = $path;
        }

        unset($params['imagedescr3']);
        if($request->has('imagedescr3')){
            if($product->imagedescr3 != null) {
                Storage::delete($product->imagedescr3);
            }
            $path = $request->file('imagedescr3')->store('products');
            $params['imagedescr3'] = $path;
        }

        unset($params['imagedescr4']);
        if($request->has('imagedescr4')){
            if($product->imagedescr4 != null) {
                Storage::delete($product->imagedescr4);
            }
            $path = $request->file('imagedescr4')->store('products');
            $params['imagedescr4'] = $path;
        }

        unset($params['imagedescr5']);
        if($request->has('imagedescr5')){
            if($product->imagedescr5 != null) {
                Storage::delete($product->imagedescr5);
            }
            $path = $request->file('imagedescr5')->store('products');
            $params['imagedescr5'] = $path;
        }

        unset($params['imagedescr6']);
        if($request->has('imagedescr6')){
            if($product->imagedescr6 != null) {
                Storage::delete($product->imagedescr6);
            }
            $path = $request->file('imagedescr6')->store('products');
            $params['imagedescr6'] = $path;
        }

        unset($params['imagedescr7']);
        if($request->has('imagedescr7')){
            if($product->imagedescr7 != null) {
                Storage::delete($product->imagedescr7);
            }
            $path = $request->file('imagedescr7')->store('products');
            $params['imagedescr7'] = $path;
        }



        unset($params['images']);
        $images = $request->file('images');


        if ($request->hasFile('images')) :
            if($images != null) {
                Storage::delete($images);
                DB::table('images')->where('product_id', $product->id)->delete();
            }
            foreach ($images as $image):
                $image = $image->store('products');
                //$arr[] = $image;

                DB::table('images')
                    ->where('product_id', $product->id)
                    ->updateOrInsert(['product_id' => $product->id, 'image' => $image]);
            endforeach;
        endif;
        $product->update($params);
        session()->flash('success', 'Продукция ' . $product->title . ' обновлена');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();
        //$s->where('product_id', $product->id)->delete();
        session()->flash('success', 'Продукция ' . $product->title . ' удалена');
        return redirect()->route('products.index');
    }

    public function loadSubCategories($id)
    {
        $subcategories = Subcategory::where('category_id', $id)->get();
        return response()->json($subcategories);
    }

}

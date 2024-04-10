<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use App\Models\Sku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DropController extends Controller
{
    public function uploadImageViaAjax(Request $request)
    {
        $name = [];
        $original_name = [];
        foreach ($request->file('file') as $key => $value) {
            $image = uniqid() . time() . '.' . $value->getClientOriginalExtension();
            $destinationPath = public_path().'/products/';
            $value->move($destinationPath, $image);
            $name[] = $image;
            $original_name[] = $value->getClientOriginalName();
        }

        return response()->json([
            'name'          => $name,
            'original_name' => $original_name
        ]);
    }

//add form data to database
    public function store(Request $request)
    {
        $messages = array(
            'images.required' => 'Image is Required.'
        );
        $this->validate($request, array(
            'images' => 'required|array|min:1',
        ),$messages);


        foreach ($request->images as $image) {
            $sku = Sku::firstOrFail();
            Image::create([
                'image' => $image,
                'product_id' => $sku->product_id,
                //'created_by' => Auth::id()
            ]);

        }
        session()->flash('success', 'Images added');
        return redirect()->route('products.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(20);
        $subcategories = Subcategory::all();
        //$subcategories = Subcategory::where('category_id', 1)->get();
        return view('auth.categories.index', compact('categories', 'subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.categories.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $request['code'] = Str::slug($request->title);
        $params = $request->all();

        Category::create($params);
        session()->flash('success', 'Категория добавлена ' . $request->title);
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('auth.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('auth.categories.form', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $request['code'] = Str::slug($request->title);
        $params = $request->all();
        $category->update($params);

        session()->flash('success', 'Категория ' . $request->title . ' обновлена');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Product::where('category_id', $category->id)->update(['category_id' => 64]);
        $category->delete();

        session()->flash('success', 'Категория ' . $category->title . ' удалена');
        return redirect()->route('categories.index');
    }
}

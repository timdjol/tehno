<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SubcategoryRequest;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Str;


class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = Subcategory::paginate(30);
        return view('auth.subcategories.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('auth.subcategories.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubcategoryRequest $request)
    {
        $request['code'] = Str::slug($request->title);
        $params = $request->all();
        Subcategory::create($params);
        session()->flash('success', 'Подкатегория добавлена ' . $request->title);
        return redirect()->route('subcategories.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcategory $subcategory)
    {
        $categories = Category::all();
        return view('auth.subcategories.form', compact('subcategory', 'categories'));
    }

    public function show(Subcategory $subcategory)
    {
        return view('auth.subcategories.show', compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubcategoryRequest $request, Subcategory $subcategory)
    {
        $request['code'] = Str::slug($request->title);
        $params = $request->all();
        $subcategory->update($params);
        session()->flash('success', 'Подкатегория ' . $request->title . ' обновлена');
        return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        session()->flash('success', 'Подкатегория ' . $subcategory->title . ' удалена');
        return redirect()->route('subcategories.index');
    }
}

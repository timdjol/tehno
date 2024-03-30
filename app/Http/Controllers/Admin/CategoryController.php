<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allcat = Category::all();
        //$categories = Category::where('parent_id', 0)->with('subcategory')->get();
        $categories = Category::all();
        return view('auth.categories.index', compact('categories', 'allcat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parents = Category::where('parent', 'on')->get();
        return view('auth.categories.form', compact('parents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $request['code'] = Str::slug($request->title);
        foreach (['parent'] as $fieldName){
            if(!isset($params[$fieldName])){
                $params[$fieldName] = 0;
            }
        }
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

        foreach (['parent'] as $fieldName){
            if(!isset($params[$fieldName])){
                $params[$fieldName] = 0;
            }
        }

        $category->update($params);

        session()->flash('success', 'Категория ' . $request->title . ' обновлена');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('success', 'Категория ' . $category->title . ' удалена');
        return redirect()->route('categories.index');
    }
}

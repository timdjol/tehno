<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use Illuminate\Support\Facades\Storage;

class FaqController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.faqs.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FaqRequest $request)
    {
        $params = $request->all();
        unset($params['image']);
        if($request->has('image')){
            $path = $request->file('image')->store('faqs');
            $params['image'] = $path;
        }
        Faq::create($params);

        session()->flash('success', 'Вопрос добавлен ' . $request->title);
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function edit(Faq $faq)
    {
        return view('auth.faqs.form', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FaqRequest $request, Faq $faq)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            Storage::delete($faq->image);
            $params['image'] = $request->file('image')->store('faqs');
        }

        $faq->update($params);

        session()->flash('success', 'Вопрос ' . $request->title . ' обновлен');
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        session()->flash('success', 'Вопрос ' . $faq->title . ' удален');
        return redirect()->route('dashboard');
    }
}

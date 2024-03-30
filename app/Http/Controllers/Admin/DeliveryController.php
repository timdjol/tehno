<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeliveryRequest;
use App\Models\Delivery;
use Illuminate\Support\Facades\Storage;

class DeliveryController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.deliveries.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DeliveryRequest $request)
    {
        $params = $request->all();
        unset($params['image']);
        if($request->has('image')){
            $path = $request->file('image')->store('deliveries');
            $params['image'] = $path;
        }
        Delivery::create($params);
        session()->flash('success', 'Информация о доставка создана');
        return redirect()->route('homes.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Delivery $delivery)
    {
        return view('auth.deliveries.form', compact('delivery'));
    }

    public function update(DeliveryRequest $request, Delivery $delivery)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            Storage::delete($delivery->image);
            $params['image'] = $request->file('image')->store('deliveries');
        }
        $delivery->update($params);
        session()->flash('success', 'Информация о доставка обновлена');
        return redirect()->route('homes.index');
    }

    public function destroy(Delivery $delivery)
    {
        $delivery->delete();
        Storage::delete($delivery->image);
        session()->flash('success', 'Информация о доставка удалена');
        return redirect()->route('homes.index');
    }

}

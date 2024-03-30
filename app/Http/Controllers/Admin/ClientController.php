<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.clients.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = $request->all();
        unset($params['image']);
        if($request->has('image')){
            $path = $request->file('image')->store('clients');
            $params['image'] = $path;
        }
        Client::create($params);
        session()->flash('success', 'Изображение добавлено');
        return redirect()->route('homes.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('auth.clients.form', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            Storage::delete($client->image);
            $params['image'] = $request->file('image')->store('clients');
        }
        $client->update($params);
        session()->flash('success', 'Изображение обновлено');
        return redirect()->route('homes.index');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        Storage::delete($client->image);
        session()->flash('success', 'Изображение удалено');
        return redirect()->route('homes.index');
    }

}

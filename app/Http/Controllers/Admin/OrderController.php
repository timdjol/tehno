<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::active()->paginate(10);
        return view('auth.orders.index', compact('orders'));
    }

    /**
     * @param Order $order
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function show(Order $order)
    {
        $products = $order->products()->withTrashed()->get();
        return view('auth.orders.show', compact('order', 'products'));
    }


    public function edit(Order $order)
    {
        return view('auth.orders.form', compact('order'));
    }

    /**
     * @param OrderRequest $request
     * @param Order $order
     * @return RedirectResponse
     */
    public function update(OrderRequest $request, Order $order)
    {
        $params = $request->all();
        $order->update($params);
        session()->flash('success', 'Заказ ' . $request->name . ' обновлен');
        return redirect()->route('orders.index');
    }

    /**
     * @param Order $order
     * @return RedirectResponse
     */
    public function destroy(Order $order)
    {
        $order->delete();
        session()->flash('success', 'Заказ ' . $order->name . ' удален');
        return redirect()->route('orders.index');
    }


}


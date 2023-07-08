<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('order', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order;
        $order->name = $request->name;
        $order->product_name = $request->product_name;
        $order->items = $request->item;
        $order->save();

        return redirect()->route('order.index')->with(['create' => 'Order Created!!']);
    }

    /**
     * Display the specified resource.
     */
    public function edit($id)
    {
        $edit = Order::find($id);

        return view('editOrder', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Order::find($id);
        $data->name = $request->name;
        $data->product_name = $request->product_name;
        $data->items = $request->item;
        $data->update();

        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Order::where('id', $id);
        $data->delete();

        return back();
    }
}

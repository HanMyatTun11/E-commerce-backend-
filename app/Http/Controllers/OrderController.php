<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function allOrders()
    {
        $orders=Order::all();
        return view('order.order',compact('orders'));
    }

    public function updateStatus($id){
        $order=Order::find($id);
        $order->status=!$order->status;
        $order->update();
        return redirect()->route('all-orders');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Order $order)
    {
        //
    }


    public function edit(Order $order)
    {
        //
    }


    public function update(Request $request, Order $order)
    {
        //
    }


    public function destroy(Order $order)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index(\App\Order $order)
    {
        $orderItems = $order->orderItems;

        return view('order-items.index', compact('orderItems'));
    }
}
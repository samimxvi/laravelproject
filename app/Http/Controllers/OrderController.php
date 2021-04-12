<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\OrderItem;
use Carbon\Carbon;
use App\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list()
    {
        $orders = Order::all();

        $isCreated = session()->get('isCreated');
        $isDeleted = session()->get('isDeleted');

        return view('orders.list', compact('orders', 'isCreated', 'isDeleted'));
    }

    public function checkout()
    {
        if (!session()->has('cart')) {
            return view('products.cart');
        }
        
        $oldCart = session('cart');
        $cart = new Cart($oldCart);
        $products = $cart->items;
        $totalPrice = $cart->totalPrice;
        $num = 1;

        $quantityError = session()->get('quantityError');

        return view('orders.checkout', compact('products', 'totalPrice', 'num', 'quantityError'));
    }

    public function store()
    {
        $user = auth()->user();
        $date = Carbon::now();
        $total = request('total');

        $order = $user->orders()->create([
            'date' => $date,
            'total' => $total,
        ]);

        $oldCart = session('cart');
        $cart = new Cart($oldCart);
        $products = $cart->items;

        foreach($products as $item) {
            $product = Product::find($item['item']['id']);
            $quantity = request('quantity-' .$product->id);

            if ($product->quantity >= $quantity) {
                $order->orderItems()->create([
                    'product_id' => $product->id,
                    'quantity' => $quantity
                ]);

                $product->quantity = $product->quantity - $quantity;
                $product->save();

                session()->forget('cart');
            }
            else {
                session()->flash('quantityError', true);

                return redirect()->route('order.checkout');
            }
        }

        session()->flash('isCreated', true);
        
        if ($user->is_admin) {
            return redirect()->route('order.list');
        }
        else {
            return redirect()->route('user.orders');
        }
    }

    public function destroy(\App\Order $order)
    {
        foreach($order->orderItems as $item) {
            $product = $item->product;
            $product->quantity += $item->quantity;
            
            $product->save();
        }

        $order->delete();

        session()->flash('isDeleted', true);

        return redirect()->route('order.list');
    }
}
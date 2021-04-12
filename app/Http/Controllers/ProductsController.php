<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\User;
use App\Cart;
use App\Tag;
use App\Info;
use \Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        $isAdded = session()->get('isAdded');

        return view('products.index', compact('products', 'categories', 'isAdded'));
    }

    public function indexByCategory(\App\Category $category)
    {
        $products = $category->products;
        $categories = Category::all();
        
        $isAdded = session()->get('isAdded');

        return view('products.index', compact('products', 'categories', 'isAdded'));
    }

    public function list()
    {
        $products = Product::all();

        $isCreated = session()->get('isCreated');
        $isDeleted = session()->get('isDeleted');

        return view('products.list', compact('products', 'isCreated', 'isDeleted'));
    }

    public function show(\App\Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => ['required', 'unique:products'],
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'image' => ['required', 'image'],
            'category_id' => 'required',
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $product = Product::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'price' => $data['price'],
            'quantity' => $data['quantity'],
            'category_id' => $data['category_id'],
            'image' => $imagePath,
        ]);

        $tags = Tag::where('category_id', $product->category_id)->get();

        foreach($tags as $tag) {
            $product->infos()->create([
                'tag_id' => $tag->id,
                'value' => ''
            ]);

            $product->save();
        }

        request()->session()->flash('isCreated', true);

        return redirect()->route('product.list');
    }

    public function edit(\App\Product $product)
    {
        $categories = Category::all();

        $isUpdated = session()->get('isUpdated');

        return view('products.edit', compact('product', 'categories', 'isUpdated'));
    }

    public function update(Product $product)
    {
        $data = request()->validate([
            'title' => ['required', Rule::unique('products')->ignore($product->id)],
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'image' => 'image',
            'category_id' => 'required',
        ]);
        
        if (request('image')) {
            $imagePath = request('image')->store('uploads', 'public');

            $imageArray = ['image' => $imagePath];
        }
        
        $product->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        request()->session()->flash('isUpdated', true);

        return redirect()->route('product.edit', ['product' => $product->id]);
    }

    public function destroy(\App\Product $product)
    {
        $product->delete();

        request()->session()->flash('isDeleted', true);

        return redirect()->route('product.list');
    }

    public function cart()
    {
        $isCleared = session()->get('isCleared');
        $isRemoved = session()->get('isRemoved');

        if (!session()->has('cart')) {
            return view('products.cart', compact('isCleared', 'isRemoved'));
        }

        $oldCart = session('cart');
        $cart = new Cart($oldCart);
        $products = $cart->items;
        $totalPrice = $cart->totalPrice;
        $num = 1;

        return view('products.cart', compact('products', 'totalPrice', 'num', 'isCleared', 'isRemoved'));
    }

    public function addToCart(\App\Product $product)
    {
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->add($product, $product->id);

        session()->put('cart', $cart);
        request()->session()->flash('isAdded', true);

        return redirect()->route('product.index');
    }

    public function removeFromCart(\App\Product $product)
    {
        $oldCart = session('cart');
        $cart = new Cart($oldCart);

        
        if (count($cart->items) > 1) {
            $cart->remove($product->id);
            
            session()->put('cart', $cart);
        } else {
            session()->forget('cart');
        }

        request()->session()->flash('isRemoved', true);

        return redirect()->route('product.cart');
    }

    public function clearCart()
    {
        session()->forget('cart');
        request()->session()->flash('isCleared', true);

        return redirect()->route('product.cart');
    }

}
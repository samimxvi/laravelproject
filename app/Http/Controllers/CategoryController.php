<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        $categories = Category::all();

        $isCreated = session()->get('isCreated');
        $isDeleted = session()->get('isDeleted');

        return view('categories.list', compact('categories', 'isCreated', 'isDeleted'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
        ]);

        Category::create($data);

        request()->session()->flash('isCreated', true);

        return redirect()->route('category.list');
    }

    public function edit(\App\Category $category)
    {
        $isUpdated = session()->get('isUpdated');

        return view('categories.edit', compact('category', 'isUpdated'));
    }

    public function update(Category $category)
    {
        $data = request()->validate([
            'name' => 'required',
        ]);
        
        
        $category->update($data);

        request()->session()->flash('isUpdated', true);

        return redirect()->route('category.edit', ['category' => $category->id]);
    }

    public function destroy(\App\Category $category)
    {
        $category->delete();

        request()->session()->flash('isDeleted', true);

        return redirect()->route('category.list');
    }
}
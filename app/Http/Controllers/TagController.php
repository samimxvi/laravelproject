<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Category;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function list()
    {
        $tags = Tag::all();

        $isCreated = session()->get('isCreated');
        $isDeleted = session()->get('isDeleted');

        return view('tags.list', compact('tags', 'isCreated', 'isDeleted'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('tags.create', compact('categories'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'category_id' => 'required'
        ]);

        Tag::create($data);

        request()->session()->flash('isCreated', true);

        return redirect()->route('tag.list');
    }

    public function edit(Tag $tag)
    {
        $categories = Category::all();

        $isUpdated = session()->get('isUpdated');

        return view('tags.edit', compact('categories', 'tag', 'isUpdated'));
    }

    public function update(Tag $tag)
    {
        $data = request()->validate([
            'name' => 'required',
            'category_id' => 'required'
        ]);
        
        $tag->update($data);

        request()->session()->flash('isUpdated', true);

        return redirect()->route('tag.edit', ['tag' => $tag->id]);
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        request()->session()->flash('isDeleted', true);

        return redirect()->route('tag.list');
    }
}
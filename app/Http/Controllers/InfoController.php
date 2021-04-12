<?php

namespace App\Http\Controllers;

use App\Product;
use App\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function edit(\App\Product $product)
    {
        $infos = $product->infos;

        $isUpdated = session()->get('isUpdated');

        return view('infos.edit', compact('product', 'infos', 'isUpdated'));
    }

    public function update(\App\Product $product)
    {
        $ids = request('ids');
        $values = request('values');

        for($i = 0; $i < count($ids); $i++) {
            $info = Info::find($ids[$i]);
            
            $info->update([
                'value' => $values[$i]
            ]);

            $info->save();
        }

        request()->session()->flash('isUpdated', true);

        return redirect()->route('info.edit', ['product' => $product->id]);
    }
}
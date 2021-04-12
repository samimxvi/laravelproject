<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $guarded = [];    

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
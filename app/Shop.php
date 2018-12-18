<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }
}

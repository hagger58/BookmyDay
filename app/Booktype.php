<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booktype extends Model
{
    public function products() 
    {
        return $this->belongsToMany('App\Product');
    }
}

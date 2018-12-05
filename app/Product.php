<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function booktypes() 
    {
        return $this->belongsToMany('App\Booktype');
    }

    public function genres() 
    {
        return $this->belongsToMany('App\Genre');
    }

    public function authors() 
    {
        return $this->belongsToMany('App\Author');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function publisher()
    {
        return $this->belongsTo('App\Publisher');
    }
}

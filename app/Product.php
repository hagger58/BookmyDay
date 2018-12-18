<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function authors()
    {
        return $this->belongsToMany('App\Author');
    }
    public function booktypes()
    {
        return $this->belongsToMany('App\Booktype');
    }
    public function cart()
    {
        return $this->hasMany('App\Cart');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }
    public function product()
    {
        return $this->hasMany('App\Product');
    }
    public function publisher()
    {
        return $this->belongsTo('App\Publisher');
    }
    public function review()
    {
        return $this->hasMany('App\Review');
    }
    public function shop()
    {
        return $this->hasOne('App\Shop');
    }
    public function subcategory()
    {
        return $this->belongsTo('App\Sub_Category');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // relazioni posts - categories
    public function posts() {
        return $this->hasMany('App\Post');
    }
}

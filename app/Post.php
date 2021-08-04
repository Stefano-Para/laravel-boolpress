<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'content',
        'cover'
    ];

    // protected $with = [
    //     'category',
    //     'tags'
    // ];

    // relazione categories - posts
    public function category() {
        return $this->belongsTo('App\Category');
    }

    // relazione posts - tags
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}

<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'order',
    ];

    public function pictures()
    {
        return $this->belongsToMany('App\Picture', 'picture_category', 'category_id', 'pictures_id')->orderBy('order');
    }
}

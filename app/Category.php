<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'order',
    ];

    public function pictures()
    {
        return $this->belongsToMany('App\Picture', 'picture_category', 'pictures_id', 'category_id');
    }
}

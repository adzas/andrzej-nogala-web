<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = [
        'name',
        'file',
        'alt',
        'description',
        'categories',
        'order',
    ];


    public function getFileLink($pre = '')
    {
        return $pre . 'storage/app/' . $this->file;
    }


    public function categories()
    {
        return $this->belongsToMany('App\Category', 'picture_category', 'pictures_id', 'category_id');
    }
}

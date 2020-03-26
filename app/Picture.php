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
    ];


    public function getFileLink($pre = '')
    {
        return $pre . 'storage/app/' . $this->file;
    }
}

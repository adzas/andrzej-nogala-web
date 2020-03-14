<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Formularz edycji zdjęć
     */
    public function edit($id)
    {
        echo "Gallery $id";
    }

    /**
     * Wyświetla wszytkie zdjęcia
     */
    public function index()
    {
        return view('pictures.index');
        //$gallery = Gallery::latest()->get();
        //return view('pictures.index')->with('pictures', $gallery);
    }
}

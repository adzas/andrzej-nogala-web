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
        $pictures = Gallery::all();
        //dd($pictures);
        return view('pictures.index')->with('pictures', $pictures);
        //$gallery = Gallery::latest()->get();
        //return view('pictures.index')->with('pictures', $gallery);
    }
}

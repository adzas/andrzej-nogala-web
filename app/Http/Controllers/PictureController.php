<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePictureRequest;

class PictureController extends Controller
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
        $pictures = Picture::all();
        //dd($pictures);
        return view('pictures.index')->with('pictures', $pictures);
        //$Picture = Picture::latest()->get();
        //return view('pictures.index')->with('pictures', $Picture);
    }

    public function store(CreatePictureRequest $request)
    {
        //dd($request);
        return view('pictures.index');
        /* Storage::disk('csv')->put('file.csv', $content);
        $content = Storage::disk('csv')->get('file.csv'); */
    }

    public function create()
    {
        return view('pictures.create');
    }
}

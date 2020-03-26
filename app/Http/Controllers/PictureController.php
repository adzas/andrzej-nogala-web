<?php

namespace App\Http\Controllers;

use Session;
use App\Picture;
use App\Http\Controllers\FileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreatePictureRequest;
use App\Http\Requests\EditPictureRequest;

class PictureController extends Controller
{    
    /**
     * Wyświetla wszystkie zdjęcia
     */
    public function index()
    {
        $pictures = Picture::all();
        return view('pictures.index')->with('pictures', $pictures);
    }

    /**
     * przekazuje ścieżkę gdzie znajduje się formularz dodawania wpisu
     */
    public function create()
    {
        return view('pictures.create');
    }

    /**
     * Formularz edycji zdjęć
     */
    public function edit($id)
    {
        $picture = Picture::find($id);
        return view('pictures.edit')->with('picture', $picture);
    }
    
    /**
     * Zapisuje wpis do bazy
     */
    public function store(CreatePictureRequest $request)
    {
        $path = FileController::store($request);
        Picture::create([
            'name' => $request->input('name'), 
            'file' => $path,
            'alt' => $request->input('alt'),
            'description' => $request->input('description'),
            ]);
        $pictures = Picture::all();
        return view('pictures.index')->with('pictures', $pictures);
    }

    /**
     * Funkcja aktualizująca wpis
     */
    public function update($id, EditPictureRequest $request)
    {
        $picture = Picture::find($id);
        $picture->name = $request->input('name');
        $picture->file = FileController::update($picture->file, $request);
        $picture->alt = $request->input('alt');
        $picture->description = $request->input('description');
        $picture->save();
        Session::flash('result_edit_picture', 'Poprawnie zaktualizowano dane');
        return redirect(url("pictures/{$picture->id}/edit"));
        //return view('pictures.show')->with('picture', $picture);
    }
    
    public function show($id)
    {
        $picture = Picture::find($id);
        return view('pictures.show')->with('picture', $picture);
    }

    public function destroy($id)
    {
        $picture = Picture::find($id);
        $picture->delete();
    }
}

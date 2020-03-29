<?php

namespace App\Http\Controllers;

use Session;
use App\Category;
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
        $categories = Category::select('name', 'id')->orderBy('order')->get();
        $picture = Picture::find($id);
        return view('pictures.edit', compact('picture', 'categories'));
    }
    
    /**
     * Zapisuje wpis do bazy
     */
    public function store(CreatePictureRequest $request)
    {
        $path = FileController::store($request);
        $picture = new Picture;
        $picture->name = $request->input('name');
        $picture->file = $path;
        $picture->alt = $request->input('alt');
        $picture->description = $request->input('description');
        $categoryList = $request->input('categories');
        $picture->categories()->attach($categoryList);
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
        $categoryList = $request->input('categories');
        $picture->categories()->sync($categoryList);
        Session::flash('result_edit_picture', 'Poprawnie zaktualizowano dane');
        return redirect(url("pictures/{$picture->id}/edit"));
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

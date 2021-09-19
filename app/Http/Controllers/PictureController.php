<?php

namespace App\Http\Controllers;

use App\Category;
use App\Picture;
use App\Http\Controllers\FileController;
use App\Http\Requests\CreatePictureRequest;
use App\Http\Requests\EditPictureRequest;
use Exception;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{    
    /**
     * Wyświetla wszystkie zdjęcia
     */
    public function index()
    {
        $pictures = Picture::select('file', 'id')->orderBy('order')->get();
        return view('pictures.index')->with('pictures', $pictures);
    }

    /**
     * przekazuje ścieżkę gdzie znajduje się formularz dodawania wpisu
     */
    public function create()
    {
        $categories = Category::select('name', 'id')->orderBy('order')->get();
        return view('pictures.create')->with('categories', $categories);
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
        if (false == $path) {
            new Exception('Błąd: brak ścieżki pliku.');
        }
        $picture = new Picture;
        $picture->name = $request->input('name');
        $picture->order = $request->input('order');
        $picture->file = $path;
        $picture->alt = $request->input('alt');
        $picture->description = $request->input('description');
        $picture->save();
        $categoryList = $request->input('categories');
        $picture->categories()->attach($categoryList);

        return view('pictures.index')->with('pictures', Picture::all());
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
        session(['result_edit_picture' => 'Poprawnie zaktualizowano dane']);

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
        if ($picture->delete()) {
            Storage::disk('public')->delete($picture->file);
            session(['result_picture_remove' => 'Usunięto zdjęcie']);
        } else {
            session(['result_picture_remove' => 'Niestety nie udało się wykonac operacji. Spróbuj później.']);
        }

        return redirect('pictures');
    }
}

<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Zapisuje zdjęcie do folderu i zwraza ścieżkę
     */
    public static function store(Request $request)
    {
        /**
         * Dodaje plik do galerii
         */
        $path = Storage::put('gallery', $request->file('file'));
        return $path;
    }
    
    /**
     * Aktualizuje zdjęcie lub zwraca wartość ścieżki zdjęcia z przed akrualizacji
     */
    public static function update($file, Request $request)
    {
        $newFile = $request->file('file');
        if($newFile != null)
        {
            $path = Storage::put('gallery', $newFile);
            if($file != null)
            {
                Storage::delete($file);
            }
        }
        elseif($file != null)
        {
            $path = $file;
        }
        else
        {
            return false;
        }

        return $path;
    }
}

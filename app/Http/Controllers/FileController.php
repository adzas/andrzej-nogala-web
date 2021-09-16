<?php

namespace App\Http\Controllers;

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
        if ($request->hasFile('file')) {
            return Storage::disk('public')->put('gallery', $request->file);
        }

        return false;
    }
    
    /**
     * Aktualizuje zdjęcie lub zwraca wartość ścieżki zdjęcia z przed akrualizacji
     */
    public static function update($file = null, Request $request): string
    {
        $path = '';
        if($file != null) {
            $path = $file;
        }
        if($request->hasFile('file'))
        {
            $newPath = self::store($request);
            if(false != $newPath)
            {
                $file->delete();
                $path = $newPath;
            }
        }

        return $path;
    }
}

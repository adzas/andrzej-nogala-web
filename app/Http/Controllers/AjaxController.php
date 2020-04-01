<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Picture;
use App\Category;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Funkcja odpowiadająca za wyświetlanie głównych pozycji w menu
     */
    public function index(Request $request) {
        $content = $request->only('param');
        switch ($content['param']) {
            case 'about':
                $about = About::latest()->first();
                return view('ajaxViews.about')->with('about', $about);
                
            case 'contact':
                $contact = Contact::latest()->first();
                return view('ajaxViews.contact')->with('contact', $contact);

            case 'gallery':
                $categories = Category::select('name', 'id')->orderBy('order')->get();
                $pictures = Picture::take(16)->get();
                return view('ajaxViews.gallery', compact('pictures', 'categories'));
            
            default:
                $about = About::latest()->first();
                return view('ajaxViews.about')->with('about', $about);
        }
    }


    /**
     * Funkcja do obsługi modułu galerii
     */
    public function gallery(Request $request)
    {
        $id = $request->only('id');
        $categories = Category::select('name', 'id')->orderBy('order')->get();
        $category = Category::find($id)->first();
        $pictures = $category->pictures;
        return view('ajaxViews.gallery', compact('pictures', 'categories'));
    }
}

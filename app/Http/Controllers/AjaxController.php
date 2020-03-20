<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Gallery;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
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
                return view('ajaxViews.gallery')->with('gallery', $content['param']);
            
            default:
                return '';
        }
    }
}

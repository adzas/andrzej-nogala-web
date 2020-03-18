<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function edit()
    {
        $contact = Contact::latest()->first();
        return view('contact.edit')->with('contact', $contact);
    }
}

<?php

namespace App\Http\Controllers;

use App\Contact;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\CreateContactRequest;

class ContactController extends Controller
{
    public function edit()
    {
        $contact = Contact::latest()->first();
        return view('contact.edit')->with('contact', $contact);
    }
    

    public function update(Contact $contact, CreateContactRequest $request)
    {
        $results = $contact->update($request->all());
        Session::flash('result_for_updated_contact', 'Poprawnie zaktualizowano dane kontaktowe.');
        return view('contact.edit')->with('contact', $contact);
    }


    public function show()
    {
        return 'test';
    }


    public function index()
    {
        return 'echo';
    }


    public function store()
    {
        return 'test';
    }
}

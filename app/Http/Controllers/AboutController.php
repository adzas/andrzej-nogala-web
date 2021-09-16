<?php

namespace App\Http\Controllers;

use App\About;
use App\Http\Requests\CreateAboutRequest;

class AboutController extends Controller
{
    public function edit()
    {
        $about = About::latest()->first();
        return view('about.edit')->with('about', $about);
    }

    public function update(About $about, CreateAboutRequest $request)
    {
        $about->update($request->all());
        session(['result_for_updated_about' => 'Zaktualizowano wpis "O mnie".']);

        return view('about.edit')->with('about', $about);
    }
}

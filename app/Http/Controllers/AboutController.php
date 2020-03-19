<?php

namespace App\Http\Controllers;

use Session;
use App\About;
use Illuminate\Http\Request;
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
        Session::flash('result_for_updated_about', 'Zaktualizowano wpis "O mnie".');
        return view('about.edit')->with('about', $about);
    }
}

<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::select()->orderBy('order', 'asc')->get();
        return view('categories.index')->with('categories', $categories);
    }
}

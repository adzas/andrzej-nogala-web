<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::select()->orderBy('order', 'asc')->get();
        return view('categories.index')->with('categories', $categories);
    }
    
    
    public function create()
    {
        return view('categories.create');
    }


    
    public function store(CreateCategoryRequest $request)
    {
        Category::create($request->all());
        return redirect('categories');
    }

    /**
     * Kieruje na formularz edycji wpisu
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit')->with('category', $category);
    }


    /**
     * funkcja edytująca wpis
     */
    public function updateSwitch($id, Request $request)
    {
        switch ($request->input('switch')) {
            case 'Aktualizuj':
                $this->update($id, $request);
                return $this->edit($id);
            
            case 'Usuń':
                $this->destroy($id);
                return redirect('categories');
            
            default:
                return $this->edit($id);
        }
    }
    

    /**
     * Aktualizacja wpisu
     */
    public function update($id, Request $request)
    {
        $category = Category::find($id);
        session(['reault_category_update' => 'Zaktualizowano wpis.']);

        return $category->update($request->all());
    }
    

    /**
     * usunięcie wpisu
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
    }

    /**
     * Aktualizuje kolejność kategorii
     */
    public function orderUpdate(Request $request)
    {
        foreach($request->input('category') as $key => $category) {
            $cat = Category::find($category);
            $cat->order = $key;
            $cat->save();
        }
        session(['result_order_category_update' => 'Zaktualizowano kolejność kategorii.']);

        return $this->index();
    }
}

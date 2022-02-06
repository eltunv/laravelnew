<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', [
            'categories' => $categories
        ]);
    }


    public function store(Request $request)
    {
        Category::create($request->all());

        return redirect()->route('categories.index');
    }


    public function create()
    {
        return view('categories.create');
    }


    public function update($id, Request $request)
    {
        $category = Category::find($id);
        $category->update($request->all());

        return redirect()->route('categories.index');
    }


    public function edit($id)
    {
        $category = Category::find($id);

        return view('categories.edit', [
            'categories' => $category
        ]);
    }


    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->route('categories.index')->with('Success delete');
    }
}

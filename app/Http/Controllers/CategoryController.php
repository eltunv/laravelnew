<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Language;
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


    public function store(CategoryRequest $categoryRequest)
    {
        Category::create($categoryRequest->all());

        return redirect()->route('categories.index');
    }


    public function create()
    {
        $languages = Language::all();

        return view('categories.create', [
            'languages' => $languages
        ]);
    }


    public function update($id, CategoryRequest $categoryRequest)
    {
        $category = Category::find($id);
        $category->update($categoryRequest->all());

        return redirect()->route('categories.index');
    }


    public function edit($id)
    {
        $languages = Language::all();
        $category = Category::find($id);

        return view('categories.edit', [
            'categories' => $category,
            'languages' => $languages
        ]);
    }


    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->route('categories.index')->with('Success delete');
    }
}

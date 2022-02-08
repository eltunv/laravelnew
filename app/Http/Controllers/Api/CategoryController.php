<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return new JsonResponse($categories);
    }

    public function show(Category $category)
    {
        return new JsonResponse($category);
    }

    public function store(CategoryRequest $categoryRequest)
    {
        $category = Category::create($categoryRequest->all());

        return new JsonResponse($category);
    }

    public function update($id, CategoryRequest $categoryRequest)
    {
        $category = Category::find($id);
        $category->update($categoryRequest->all());

        return new JsonResponse($category);
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();

        return new JsonResponse(null);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use App\Models\Language;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::all();

        return new JsonResponse($languages);
    }

    public function show(Language $language)
    {
        return new JsonResponse($language);
    }

    public function store(LanguageRequest $languageRequest)
    {
        $language = Language::create($languageRequest->all());

        return new JsonResponse($language);
    }

    public function update($id, LanguageRequest $languageRequest)
    {
        $language = Language::find($id);
        $language->update();

        return new JsonResponse($language);
    }

    public function destroy($id)
    {
        $language = Language::find($id);
        $language->delete();

        return new JsonResponse(null);
    }
}

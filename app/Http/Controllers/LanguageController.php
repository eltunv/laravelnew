<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\LanguageRequest;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::paginate(1);

        return view('languages.index', [
            'languages' => $languages
        ]);
    }


    public function store(LanguageRequest $languageRequest)
    {
        Language::create($languageRequest->all());

        return redirect()->route('languages.index');
    }


    public function create()
    {
        return view('languages.create');
    }


    public function update(Language $language,  LanguageRequest $languageRequest)
    {
        $language->update($languageRequest->all());

        return redirect()->route('languages.index');
    }


    public function edit(Language $language)
    {
        return view('languages.edit', [
            'language' => $language
        ]);
    }


    public function destroy(Language $language)
    {
        $language->delete();

        return redirect()->route('languages.index');
    }
}

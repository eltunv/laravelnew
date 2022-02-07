<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::all();

        return view('languages.index', [
            'languages' => $languages
        ]);
    }


    public function store(Request $request)
    {
        Language::create($request->all());

        return redirect()->route('languages.index');
    }


    public function create()
    {
        return view('languages.create');
    }


    public function update(Language $language, Request $request)
    {
        $language->update($request->all());

        return redirect()->route('languages.index');
    }


    public function edit(Language $language)
    {
        return view('languages.edit', [
            'languages' => $language
        ]);
    }


    public function destroy(Language $language)
    {
        $language->delete();

        return redirect()->route('languages.index');
    }
}

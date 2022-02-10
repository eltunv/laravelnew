<?php

namespace App\Http\Controllers;

use App\Http\Requests\WebsiteRequest;
use App\Models\Language;
use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $websites = Website::paginate(1);

        return view('websites.index', [
            'websites' => $websites
        ]);
    }


    public function store(WebsiteRequest $websiteRequest)
    {
        Website::create($websiteRequest->all());

        return redirect()->route('websites.index');
    }

    public function create()
    {
        $languages = Language::all();

        return view('websites.create', [
            'languages' => $languages
        ]);
    }

    public function update(Website $website, WebsiteRequest $websiteRequest)
    {
        $website->update($websiteRequest->all());

        return redirect()->route('websites.index');
    }


    public function edit(Website $website)
    {
        $languages = Language::all();

        return view('websites.edit', [
            'websites' => $website,
            'languages' => $languages
        ]);
    }


    public function destroy(Website $website)
    {
        $website->delete();

        return redirect()->route('websites.index');
    }
}

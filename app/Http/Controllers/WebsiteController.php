<?php

namespace App\Http\Controllers;

use App\Http\Requests\WebsiteRequest;
use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $websites = Website::all();

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
        return view('websites.create');
    }

    public function update(Website $website, WebsiteRequest $websiteRequest)
    {
        $website->update($websiteRequest->all());

        return redirect()->route('websites.index');
    }


    public function edit(Website $website)
    {
        return view('websites.edit', [
            'websites' => $website
        ]);
    }


    public function destroy(Website $website)
    {
        $website->delete();

        return redirect()->route('websites.index');
    }
}

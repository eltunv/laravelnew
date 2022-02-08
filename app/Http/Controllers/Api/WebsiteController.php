<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\WebsiteRequest;
use App\Models\Website;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $websites = Website::all();

        return new JsonResponse($websites);
    }

    public function show(Website $website)
    {
        return new JsonResponse($website);
    }

    public function store(WebsiteRequest $websiteRequest)
    {
        $website = Website::create($websiteRequest->all());

        return new JsonResponse($website);
    }

    public function update($id)
    {
        $website = Website::find($id);
        $website->update();

        return new JsonResponse($website);
    }

    public function destroy($id)
    {
        $website = Website::find($id);

        $website->delete();

        return new JsonResponse(null);
    }
}

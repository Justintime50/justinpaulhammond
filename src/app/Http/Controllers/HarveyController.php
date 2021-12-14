<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HarveyController extends Controller
{
    /**
     * Get the list of pipelines from Harvey.
     * This is temporary until Harvey has its own site
     *
     * @return void
     */
    public function readPipelines()
    {
        try {
            $response = Http::timeout(10)->get('http://justinpaulhammond.com:5000/pipelines');
            $pipelines = $response->json();
        } catch (Exception) {
            $pipelines = [];
        }

        return view('/harvey', compact('pipelines'));
    }
}

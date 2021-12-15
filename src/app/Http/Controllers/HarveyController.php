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
        $pipelines_response = Http::timeout(5)->get('http://justinpaulhammond.com:5000/pipelines');
        $pipelines = $pipelines_response->successful() ? $pipelines_response->json() : [];

        $harvey_health_response = Http::timeout(5)->get('http://justinpaulhammond.com:5000/health');
        $harvey_status = $harvey_health_response->status();

        return view('/harvey', compact('pipelines', 'harvey_status'));
    }

    /**
     * Gets the log details of a single pipeline.
     *
     * @return void
     */
    public function readPipeline(Request $request)
    {
        $response = Http::timeout(5)->get('http://justinpaulhammond.com:5000/pipelines/' . $request->project);
        $pipeline = $response->successful() ? $response->json() : null;

        return view('harvey-pipeline', compact('pipeline'));
    }
}

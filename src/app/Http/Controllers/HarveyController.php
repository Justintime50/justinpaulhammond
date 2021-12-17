<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HarveyController extends Controller
{
    /**
     * Get the list of projects from Harvey.
     * This is temporary until Harvey has its own site
     *
     * @return void
     */
    public function dashboard()
    {
        $harvey_health_response = Http::timeout(5)->get('http://justinpaulhammond.com:5000/health');
        $harvey_status = $harvey_health_response->status();

        $projects_response = Http::timeout(5)->get('http://justinpaulhammond.com:5000/projects');
        $projects = $projects_response->successful() ? $projects_response->json()['projects'] : [];

        $pipelines_response = Http::timeout(5)->get('http://justinpaulhammond.com:5000/pipelines');
        $pipelines = $pipelines_response->successful() ? $pipelines_response->json()['pipelines'] : [];

        return view('/harvey', compact('harvey_status', 'projects', 'pipelines'));
    }

    /**
     * Gets the log details of a single pipeline.
     *
     * @return void
     */
    public function readPipeline(Request $request)
    {
        $pipeline_id = $request->pipeline;

        $response = Http::timeout(5)->get('http://justinpaulhammond.com:5000/pipelines/' . $pipeline_id);
        $pipeline = $response->successful() ? $response->json() : null;

        return view('harvey-pipeline', compact('pipeline'));
    }

    /**
     * Gets all the pipelines for a project.
     *
     * @return void
     */
    public function readProject(Request $request)
    {
        $project = $request->project;

        $response = Http::timeout(5)->get('http://justinpaulhammond.com:5000/pipelines?project=' . $project);
        $pipelines = $response->successful() ? $response->json()['pipelines'] : null;

        return view('harvey-project', compact('project', 'pipelines'));
    }
}

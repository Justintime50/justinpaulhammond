<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Returns the index view.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return view('index');
    }
}

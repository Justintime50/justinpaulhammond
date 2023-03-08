<?php

namespace Tests\Feature;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    /**
     * Tests that we show the admin view correctly.
     *
     * @return void
     */
    public function testShowAdmin()
    {
        $controller = new HomeController();

        $request = Request::create('/', 'GET');
        $response = $controller->index($request);

        $viewData = $response->getData();

        $this->assertEmpty($viewData);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return Factory|View
     */
    public function __invoke()
    {
        return view('home');
    }
}

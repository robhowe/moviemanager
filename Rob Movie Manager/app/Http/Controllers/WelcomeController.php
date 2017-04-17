<?php

namespace RobMovieManager\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    /**
     * Cool Splash page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function welcome() {
        return view("welcome");
    }
}

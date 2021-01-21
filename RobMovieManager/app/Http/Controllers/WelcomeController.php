<?php
/**
 * WelcomeController.php
 *
 * Welcome/home page controller for Movie Manager project.
 *
 * @category   Controller
 * @package    RobMovieManager
 * @author     Rob Howe <rob@robhowe.com>
 * @copyright  2017 Rob Howe
 * @license    This file is proprietary and subject to the terms defined in file LICENSE.txt
 * @version    GitHub $Id$ https://github.com/robhowe/moviemanager
 * @link       http://moviemanager.robhowe.com/
 * @since      version 0.1
 */

namespace RobMovieManager\Http\Controllers;

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

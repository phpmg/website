<?php

namespace App\Http\Controllers;

use View;

/**
 * Class HomeController
 */
class HomeController extends Controller
{
    /**
     * @return View
     */
    public function indexAction()
    {
        return View::make('website/home/index');
    }
}

<?php

namespace App\Http\Controllers;

use View;

/**
 * Class EventsController
 */
class EventsController extends Controller
{
    /**
     * @return View
     */
    public function indexAction()
    {
        return View::make('website/events/index');
    }
}

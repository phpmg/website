<?php

namespace App\Http\Controllers;

use View;

/**
 * Class ContactController
 */
class ContactController extends Controller
{
    /**
     * @return View
     */
    public function indexAction()
    {
        return View::make('website/contact/index');
    }
}

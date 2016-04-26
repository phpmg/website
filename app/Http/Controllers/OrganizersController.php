<?php

namespace App\Http\Controllers;

use View;

/**
 * Class OrganizersController
 */
class OrganizersController extends Controller
{
    /**
     * @return View
     */
    public function indexAction()
    {
        return View::make('website/organizers/index');
    }
}

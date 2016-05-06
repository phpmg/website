<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use View;

/**
 * Class OrganizersController
 */
class OrganizersController extends Controller
{
    /**
     * @var Organizer
     */
    private $organizers;

    public function __construct(Organizer $organizers)
    {
        $this->organizers = $organizers;
    }

    /**
     * @return View
     */
    public function indexAction()
    {
        $organizers = $this->organizers->all();

        return View::make('website/organizers/index', [
            'organizers' => $organizers
        ]);
    }
}

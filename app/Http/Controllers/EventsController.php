<?php

namespace App\Http\Controllers;

use App\Models\Event;
use View;

/**
 * Class EventsController
 */
class EventsController extends Controller
{
    /**
     * @var Event
     */
    private $events;

    /**
     * @param Event $events
     */
    public function __construct(Event $events)
    {
        $this->events = $events;
    }

    /**
     * @return View
     */
    public function indexAction()
    {
        $events = $this->events->orderBy('id', 'DESC')->get();

        return View::make('website/events/index', [
            'events' => $events
        ]);
    }
}

<?php

namespace App\Console\Commands;

use App\Models\Event;
use App\Models\Venue;
use App\Services\MeetUp\GetEvents;
use Illuminate\Console\Command;

class MeetUpEventGrabber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'phpmg:meetup-event-grabber';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Grab MeetUp events and store on PHPMG website database';

    /**
     * MeetUpEventGrabber constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Getting all Events PHPMG MeetUp account...');

        $eventService = new GetEvents(new \GuzzleHttp\Client());
        $events = $eventService->get();

        $this->info('Saving events...');

        foreach ($events as $event) {
            $eventRegistry = Event::findByMeetUpId($event->id)->first();

            if (!$eventRegistry) {
                $eventRegistry = new Event();
            }

            $eventRegistry->meetup_id = $event->id;
            $eventRegistry->name = $event->name;
            $eventRegistry->description = $event->description;
            $eventRegistry->start_at = \DateTime::createFromFormat('U', $event->time / 1000);
            $eventRegistry->start_at->modify('- 3 hours');
            $eventRegistry->meetup_url = $event->link;

            $venue = Venue::findByMeetUpId($event->venue->id)->first();

            if ($venue) {
                continue;
            }

            $venue = new Venue();
            $venue->meetup_id = $event->venue->id;
            $venue->name = $event->venue->name;
            $venue->lat = $event->venue->lat;
            $venue->long = $event->venue->lon;
            $venue->address = $event->venue->address_1;
            $venue->city = $event->venue->city;

            $venue->save();

            $eventRegistry->venue_id = $venue->id;

            $eventRegistry->save();
        }

        $this->info('Done!');
    }
}

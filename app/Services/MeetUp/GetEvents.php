<?php

namespace App\Services\MeetUp;

use App\Models\Event;
use GuzzleHttp\Client;

class GetEvents
{
    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function get()
    {
        $response = $this->client->request(
            'GET',
            'http://api.meetup.com/PHP-MG/events'
        );

        $data = json_decode($response->getBody()->getContents());

        $events = [];

        foreach ($data as $event) {
            $events[] = $event;
        }

        return $events;
    }
}

<?php
namespace App\Tests\Services\MeetUp;

use App\Models\Event;
use App\Services\MeetUp\GetEvents;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Illuminate\Filesystem\Filesystem;
use PHPUnit_Framework_TestCase;

class GetEventsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function initiateService()
    {
        $guzzle = $this->getMock(Client::class);

        $getEventService = new GetEvents($guzzle);

        $this->assertInstanceOf(GetEvents::class, $getEventService);
    }

    /**
     * @test
     */
    public function getEvents()
    {
        $file = new Filesystem();
        $data = $file->get('tests/fixtures/meetup/events.json');

        $response = new Response(200, [], $data);
        $mock = new MockHandler([$response]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $getEventService = new GetEvents($client);
        $events = $getEventService->get();

        $this->assertEquals(2, count($events));
        $this->assertEquals(230462115, $events[0]->id);
    }
}

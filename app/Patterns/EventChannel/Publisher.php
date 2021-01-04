<?php

namespace App\Patterns\EventChannel;

use App\Patterns\EventChannel\Interfaces\EventChannelInterface;
use App\Patterns\EventChannel\Interfaces\PublisherInterface;

class Publisher implements PublisherInterface
{
    /**
     * topic
     *
     * @var string
     */
    private $topic;

    /**
     * event_channel
     *
     * @var EventChannelInterface
     */
    private $event_channel;

    /**
     * __construct
     *
     * @param  string $topic
     * @param  EventChannelInterface $event_channel
     * @return void
     */
    public function __construct(string $topic, EventChannelInterface $event_channel)
    {
        $this->topic = $topic;
        $this->event_channel = $event_channel;
    }

    /**
     * publish
     *
     * @param  mixed $data
     * @return void
     */
    public function publish($data) : void
    {
        $this->event_channel->publish($this->topic, $data);
    }
}

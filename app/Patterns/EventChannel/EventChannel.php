<?php

namespace App\Patterns\EventChannel;

use App\Patterns\EventChannel\Interfaces\EventChannelInterface;
use App\Patterns\EventChannel\Interfaces\SubscriberInterface;

class EventChannel implements EventChannelInterface
{
    /**
     * topics
     *
     * @var array
     */
    private $topics = [];

    /**
     * subscribe
     *
     * @param  string $topic
     * @param  SubscriberInterface $subscriber
     * @return void
     */
    public function subscribe($topic, SubscriberInterface $subscriber)
    {
        $this->topics[$topic][] = $subscriber;

        dump("subscribe: {$subscriber->getName()} -> $topic");
    }

    /**
     * publish
     *
     * @param  string $topic
     * @param  mixed $data
     * @return void
     */
    public function publish(string $topic, $data)
    {
        if (! isset($this->topics[$topic])) {
            return;
        }

        foreach ($this->topics[$topic] as $subscriber) {
            /** @var SubscriberInterface $subscriber */
            $subscriber->notify($data);
        }
    }
}

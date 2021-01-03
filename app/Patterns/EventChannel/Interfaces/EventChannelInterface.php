<?php

namespace App\Patterns\EventChannel\Interfaces;

interface EventChannelInterface
{
    /**
     * publish
     *
     * @param  string $topic
     * @param  mixed $data
     * @return void
     */
    public function publish(string $topic, $data);

    /**
     * subscribe
     *
     * @param  string $topic
     * @param  SubscriberInterface $subscriber
     * @return void
     */
    public function subscribe($topic, SubscriberInterface $subscriber);
}

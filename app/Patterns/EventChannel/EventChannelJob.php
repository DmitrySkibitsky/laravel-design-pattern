<?php

namespace App\Patterns\EventChannel;

class EventChannelJob
{
    public function run()
    {
        $event_channel = new EventChannel();

        $apple_publisher = new Publisher('apple', $event_channel);
        $samsung_publisher = new Publisher('samsung', $event_channel);
        $pixel_publisher = new Publisher('pixel', $event_channel);

        $dmitry_subscriber = new Subscriber('Dmitry');
        $alex_subscriber = new Subscriber('Alex');

        $event_channel->subscribe('apple', $dmitry_subscriber);
        $event_channel->subscribe('samsung', $alex_subscriber);
        $event_channel->subscribe('pixel', $dmitry_subscriber);

        $apple_publisher->publish('News Apple');
        $pixel_publisher->publish('News Pixel');
        $samsung_publisher->publish('News Samsung');
    }
}

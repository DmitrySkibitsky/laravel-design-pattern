<?php

namespace App\Patterns\EventChannel\Interfaces;

interface SubscriberInterface
{
    /**
     * getName
     *
     * @return string
     */
    public function getName() : string;

    /**
     * notify
     *
     * @param  mixed $data
     * @return void
     */
    public function notify($data);
}

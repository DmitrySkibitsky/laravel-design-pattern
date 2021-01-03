<?php

namespace App\Patterns\EventChannel\Interfaces;

interface PublisherInterface
{
    /**
     * publish
     *
     * @param  mixed $data
     * @return void
     */
    public function publish($data);
}

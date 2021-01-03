<?php

namespace App\Patterns\EventChannel;

use App\Patterns\EventChannel\Interfaces\SubscriberInterface;

class Subscriber implements SubscriberInterface
{
    /**
     * name
     *
     * @var string
     */
    private $name;

    /**
     * __construct
     *
     * @param  string $name
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * getName
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function notify($data)
    {
        dump("notify: subscriber - {$this->getName()}, data - $data");
    }
}

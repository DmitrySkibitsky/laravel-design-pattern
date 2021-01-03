<?php

namespace App\Patterns\Delegation;

use App\Patterns\Delegation\Interfaces\NotificationInterface;

abstract class AbstractNotification implements NotificationInterface
{
    /**
     * message
     *
     * @var string
     */
    protected $message;

    /**
     * setMessage
     *
     * @param  string $message
     * @return NotificationInterface
     */
    public function setMessage(string $message) : NotificationInterface
    {
        $this->message = $message;

        return $this;
    }

    /**
     * send
     *
     * @return bool
     */
    public function send() : bool
    {
        return true;
    }
}

<?php

namespace App\Patterns\Delegation\Interfaces;

interface NotificationInterface
{
    /**
     * setMessage
     *
     * @param  mixed $message
     * @return NotificationInterface
     */
    public function setMessage(string $message) : NotificationInterface;

    /**
     * send
     *
     * @return bool
     */
    public function send() : bool;
}

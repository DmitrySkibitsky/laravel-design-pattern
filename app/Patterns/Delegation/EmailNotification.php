<?php

namespace App\Patterns\Delegation;

class EmailNotification extends AbstractNotification
{
    /**
     * send
     * Реализация отправки уведомления на E-mail
     *
     * @return bool
     */
    public function send() : bool
    {
        dump('send: ' . __METHOD__);
        dump("message: {$this->message}");

        return true;
    }
}

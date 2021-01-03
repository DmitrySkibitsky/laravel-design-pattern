<?php

namespace App\Patterns\Delegation;

class SmsNotification extends AbstractNotification
{
    /**
     * send
     * Реализация отправки уведомления по sms
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

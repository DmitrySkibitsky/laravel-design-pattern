<?php

namespace App\Patterns\Delegation;

use App\Patterns\Delegation\Interfaces\NotificationInterface;

class AppNotification implements NotificationInterface
{
    /**
     * notification
     *
     * @var NotificationInterface
     */
    private $notification;

    public function __construct()
    {
        $this->toEmail();
    }

    /**
     * toEmail
     *
     * @return NotificationInterface
     */
    public function toEmail() : NotificationInterface
    {
        $this->notification = new EmailNotification();

        return $this;
    }

    /**
     * toSms
     *
     * @return NotificationInterface
     */
    public function toSms() : NotificationInterface
    {
        $this->notification = new SmsNotification();

        return $this;
    }

    /**
     * setMessage
     *
     * @param  string $message
     * @return NotificationInterface
     */
    public function setMessage(string $message): NotificationInterface
    {
        $this->notification->setMessage($message);

        return $this;
    }

    /**
     * send
     *
     * @return bool
     */
    public function send(): bool
    {
        return $this->notification->send();
    }
}

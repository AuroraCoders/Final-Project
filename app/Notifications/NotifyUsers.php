<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class NotifyUsers extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via($notifiable)

    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new \Illuminate\Notifications\Messages\MailMessage)
            ->subject('Notification Subject')
            ->line('Hi our valuable customer our new year sale is starting now view our website for amazing discounts.  ')
            ->action('View web', url('http://127.0.0.1:8000'));
    }
}

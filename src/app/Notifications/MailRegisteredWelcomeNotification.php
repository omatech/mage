<?php

namespace Omatech\Mage\App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailRegisteredWelcomeNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @param $token
     */
    public function __construct()
    {
        $this->queue = 'mail';
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->from(env('MAIL_USERNAME'), 'Omatech')
            ->subject(__('mage.auth.reset-password.email.subject'))
            ->view('mage::pages.auth.reset-email', [
                "token" => 'abc'
            ]);
    }
}

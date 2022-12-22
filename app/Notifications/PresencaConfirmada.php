<?php

namespace App\Notifications;

use App\Models\Convidado;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;
use App\Models\Presente;

class PresencaConfirmada extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

     public $convidado;
     public $presente;

    public function __construct(Convidado $convidado, Presente $presente)
    {
        $this->convidado = $convidado;
        $this->presente = $presente;
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
                    ->greeting('Presença Confirmada')
                    ->line($this->convidado->firstname.' '.$this->convidado->lastname."(".$this->convidado->telephone.")".'Confirmou sua presença e escolheu levar um/uma: '.$this->presente->name)
                    ->action('Notification Action', url('/'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

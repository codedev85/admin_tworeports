<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailAdmin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //   return $this->from('example@example.com')
        // ->view('mails.ex');
       // return $this->view('view.name');
       return $this->from('admin@admin.com', 'Tworeports')
            ->subject('Mailtrap Confirmation')
            ->markdown('mails.ex')
            ->with([
                'name' => 'New Mailtrap User',
                'link' => 'https://mailtrap.io/inboxes'
            ])
            ->view('mails.ex');

     }
}

<?php

namespace App\Mail;

use App\Models\Guest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvitationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $guest;
    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($guest, $url)
    {
        $this->guest = $guest;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->markdown('emails.invitation', [
        //     'url' => $this->url
        // ]);

        return $this->view('emails.invitacion');
    }
}

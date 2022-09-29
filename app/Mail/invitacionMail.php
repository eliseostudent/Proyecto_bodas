<?php

namespace App\Mail;

use App\Models\Evento;
use App\Models\Invitado;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class invitacionMail extends Mailable
{
    use Queueable, SerializesModels;
    public $evento;
    public $invitado;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Evento $evento, Invitado $invitado)
    {
        $this->evento=$evento;
        $this->invitado=$invitado;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject='Boda ' . $this->evento->nombre_1 . '&' . $this->evento->nombre_2;
        return $this->subject($subject)->view('mails.envioInivitacionMail');
    }
}

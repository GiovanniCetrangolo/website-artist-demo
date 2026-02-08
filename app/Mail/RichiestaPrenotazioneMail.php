<?php

namespace App\Mail;

use App\Models\RichiestaPrenotazione;
use Illuminate\Mail\Mailable;

class RichiestaPrenotazioneMail extends Mailable
{
    public RichiestaPrenotazione $prenotazione;

    public function __construct(RichiestaPrenotazione $prenotazione)
    {
        $this->prenotazione = $prenotazione;
    }

    public function build()
    {
        return $this->subject('Nuova richiesta di prenotazione')
            ->view('emails.richiesta_prenotazione');
    }
}

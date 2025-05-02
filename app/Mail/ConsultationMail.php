<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Consultation;

class ConsultationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $consultation;
    public $isClient;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\Consultation  $consultation
     * @param  bool  $isClient
     * @return void
     */
    public function __construct(Consultation $consultation, $isClient = false)
    {
        $this->consultation = $consultation;
        $this->isClient = $isClient;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->isClient) {
            return $this->view('emails.consultation-client')
                        ->subject('Consultation Request Received');
        }

        return $this->view('emails.consultation-owner')
                    ->subject('New Consultation Request');
    }
}
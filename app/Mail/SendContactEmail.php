<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('Email.SendContactEmail')->from('csiwebsite@circuit-solutions.net')
        ->with([
            'firstname' => $this->data->data_email['firstname'],
            'lastname' => $this->data->data_email['lastname'],
            'company' => $this->data->data_email['company'],
            'position' => $this->data->data_email['position'],
            'contact_number' => $this->data->data_email['contact_number'],
            'email' => $this->data->data_email['email'],
            'contact_message' => $this->data->data_email['contact_message'],
            ])->subject('New inquiries');
    }
}

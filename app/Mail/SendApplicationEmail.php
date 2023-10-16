<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Str;

class SendApplicationEmail extends Mailable
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
        return $this->markdown('Email.SendApplication')->from('csiwebsite@circuit-solutions.net')
        ->with([
            'firstname' => $this->data->data_email['firstname'],
            'lastname' => $this->data->data_email['lastname'],
            'email' => $this->data->data_email['email'],
            'position_applying_for' => $this->data->data_email['position_applying_for']
            ])
        ->subject('New Job Application')->attach(storage_path('app/public/Files/JobApplication/'.$this->data->data_email['file']));
    }
}

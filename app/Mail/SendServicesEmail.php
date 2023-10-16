<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendServicesEmail extends Mailable
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
        return $this->markdown('Email.SendServicesEmail')->from('csiwebsite@circuit-solutions.net')
        ->with([
            'customer_name' => $this->data->data_email['customer_name'],
            'branch_name' => $this->data->data_email['branch_name'],
            'address' => $this->data->data_email['address'],
            'contact_person' => $this->data->data_email['contact_person'],
            'contact_number' => $this->data->data_email['contact_number'],
            'email' => $this->data->data_email['email'],
            'warranty' => $this->data->data_email['warranty'],
            'account_manager' => $this->data->data_email['account_manager'],
            'product_concern' => $this->data->data_email['product_concern'],
            'product_description' => $this->data->data_email['product_description'],
            'product_brand' => $this->data->data_email['product_brand'],
            'model_no' => $this->data->data_email['model_no'],
            'other_details' => $this->data->data_email['other_details'],

            ])->subject('Service Request');
    }
}

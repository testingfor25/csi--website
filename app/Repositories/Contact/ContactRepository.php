<?php

namespace App\Repositories\Contact;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Events\SendContactEmailEvent;
//use Your Model

/**
 * Class ContactRepository.
 */
class ContactRepository
{
    public function sendContactEmail($data)
    {
        /*Send Mail */
        $data_email = array(
            'firstname' => $data->firstname,
            'lastname' => $data->lastname,
            'company' => $data->company,
            'position' => $data->position,
            'contact_number' => $data->contact_number,
            'email' => $data->email,
            'contact_message' => $data->message); 
        return event(new SendContactEmailEvent($data_email));
    }
}

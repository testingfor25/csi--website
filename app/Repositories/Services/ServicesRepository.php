<?php

namespace App\Repositories\Services;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Events\SendServicesEmailEvent;
//use Your Model

/**
 * Class ServicesRepository.
 */
class ServicesRepository
{
    public function sendServicesEmail($data)
    {
        /*Send Mail */
        $data_email = array(
            'customer_name' => $data->customer_name,
            'branch_name' => $data->branch_name,
            'address' => $data->address,
            'contact_person' => $data->contact_person,
            'contact_number' => $data->contact_number,
            'email' => $data->email,
            'warranty' => $data->warranty,
            'account_manager' => $data->account_manager,
            'product_concern' => $data->product_concern,
            'product_description' => $data->trouble_description,
            'product_brand' => $data->product_brand,
            'model_no' => $data->model_no,
            'other_details' => $data->other_details);
        return event(new SendServicesEmailEvent($data_email));
    }
}

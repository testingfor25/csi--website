<?php

namespace App\Repositories\Career;

use Illuminate\Support\Facades\Storage;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model
use App\Models\Career\Career;
use App\Events\SendApplicationEvent;

/**
 * Class CareerRepository.
 */
class CareerRepository
{
    public function store($data)
    {
        /**
         * @ Handle File Upload 
         **/
        //gets the original file name
        $job_image_ext = $data->job_image->getClientOriginalName();
        //gets the original file name except the extension
        $job_image_filename = pathinfo($job_image_ext, PATHINFO_FILENAME);
        $job_image_file = time().'_'.$job_image_filename.'.'.$data->job_image->getClientOriginalExtension();
        // Store File
        $job_image = $data->job_image->storeAs('public/Files/careers/job_image', $job_image_file);

        return Career::create([
            'job_title' => $data->job_title,
            'job_description' => $data->job_title,
            'job_image' => $job_image_file,
            'status' => false
        ]);
    }

    public function update($data, $id)
    {
        $career = Career::where('id', '=', $id)->first();
        /**
         * @ Check File
         **/
        if($data->job_image != $career->job_image) {
            /**
             * @ Handle Updated File Upload 
             **/
            //gets the original file name
            $job_image_ext = $data->job_image->getClientOriginalName();
            //gets the original file name except the extension
            $job_image_filename = pathinfo($job_image_ext, PATHINFO_FILENAME);
            $job_image_file = time().'_'.$job_image_filename.'.'.$data->job_image->getClientOriginalExtension();
            // Store File
            $job_image = $data->job_image->storeAs('public/Files/careers/job_image', $job_image_file);
            // Delete Old File
            Storage::delete('public/Files/careers/'.$career->job_image);
        }
        else {
            // Same File
            $job_image_file = $career->job_image;
        }

        return Career::where('id', $id)
        ->update([
            'job_title' => $data->job_title,
            'job_description' => $data->job_title,
            'job_image' => $job_image_file,
            'status' => $data->status
        ]);
    }

    public function careers()
    {
        return Career::orderBy('created_at', 'DESC')->paginate(10);
    }

    public function updateCareerStatus($data)
    {
        return $data->where('id', $data->id)->update(['status' => !$data->status]);
    }

    public function destroy($data)
    {
        Storage::delete('public/Files/careers/job_image/'.$data->job_image);
        return $data->delete();
    }


    public function careersList()
    {
        $career = Career::where('status', '=', 1)->orderBy('created_at', 'DESC')->get();
        $collection = collect($career);
        return $collection->map(function ($collection) {
            return [
                'id' => $collection->id,
                'job_title' => $collection->job_title,
                'job_description' => $collection->job_description,
                'job_image' => '/storage/Files/careers/job_image/'.$collection->job_image,
                'status' => $collection->status
            ];
        });
    }

    public function sendApplication($data)
    {
         /**
         * @ Handle File Upload 
         **/
        //gets the original file name
        $job_application_file_ext = $data->file->getClientOriginalName();
        //gets the original file name except the extension
        $job_application_file_filename = pathinfo($job_application_file_ext, PATHINFO_FILENAME);
        $job_application_file_file = time().'_'.$job_application_file_filename.'.'.$data->file->getClientOriginalExtension();
        // Store File
        $job_application_file = $data->file->storeAs('public/Files/JobApplication/', $job_application_file_file);

        /*Send Mail */
        $data_email = array(
            'firstname' => $data->firstname,
            'lastname' => $data->lastname,
            'email' => 'donotreply@circuit-solutions.net',
            'position_applying_for' => $data->position_applying_for,
            'file' => $job_application_file_file); 
        return event(new SendApplicationEvent($data_email));
    }
}

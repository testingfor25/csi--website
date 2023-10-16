<?php

namespace App\Http\Controllers\Api\Contact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contact\ContactRepository;

class ContactController extends Controller
{
    public $contactRepository;

    public function __construct(ContactRepository $ContactRepository)
    {
        $this->contactRepository = $ContactRepository;
    }

    public function sendContactEmail(Request $request)
    {
        return response()->json($this->contactRepository->sendContactEmail($request));
    }
}

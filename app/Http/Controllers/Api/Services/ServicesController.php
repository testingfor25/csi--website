<?php

namespace App\Http\Controllers\Api\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Services\ServicesRepository;

class ServicesController extends Controller
{
    public $servicesRepository;

    public function __construct(ServicesRepository $ServicesRepository)
    {
        $this->servicesRepository = $ServicesRepository;
    }

    public function sendServicesEmail(Request $request)
    {
        return response()->json($this->servicesRepository->sendServicesEmail($request));
    }
}

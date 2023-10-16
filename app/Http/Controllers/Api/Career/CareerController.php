<?php

namespace App\Http\Controllers\Api\Career;

use Illuminate\Http\Request;
use App\Models\Career\Career;
use App\Http\Controllers\Controller;
use App\Http\Requests\Career\CareerRequest;
use App\Repositories\Career\CareerRepository;

class CareerController extends Controller
{
    private $careerRepository;

    public function __construct(CareerRepository $CareerRepository)
    {
        $this->careerRepository = $CareerRepository;
    }

    public function store(CareerRequest $request)
    {
        return response()->json($this->careerRepository->store($request));
    }

    public function update(CareerRequest $request, $id)
    {
        return response()->json($this->careerRepository->update($request, $id));
    }

    public function careers()
    {
        return response()->json($this->careerRepository->careers());
    }

    public function updateCareerStatus(Career $Career)
    {
        return response()->json($this->careerRepository->updateCareerStatus($Career));
    }

    public function destroy(Career $Career)
    {
        return response()->json($this->careerRepository->destroy($Career));
    }

    public function careersList()
    {
        return response()->json($this->careerRepository->careersList());
    }

    public function sendApplication(Request $request)
    {
        return response()->json($this->careerRepository->sendApplication($request));
    }

}

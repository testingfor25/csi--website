<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Repositories\Auth\AuthRepository;

class AuthController extends Controller
{

    private $authRepository;

    public function __construct(AuthRepository $AuthRepository)
    {
        $this->authRepository = $AuthRepository;
    }

    public function login(LoginRequest $request)
    {
        return response()->json($this->authRepository->login($request));
    }

    public function logout(Request $request)
    {
        return response()->json($this->authRepository->logout($request));
    }
}

<?php

namespace App\Repositories\Auth;

use Auth;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model
use GuzzleHttp\Exception\BadResponseException;

/**
 * Class AuthRepository.
 */
class AuthRepository
{
    private $baseURL;
    private $admin;
    private $clientSecret;
    private $active;

    public function __construct()
    {
        $this->baseURL = env('APP_URL');
        $this->admin = 1;
        $this->clientSecret = env('CLIENT_SECRET');
        $this->active = 1;
    }
    
    public function login($authData)
    {
        $http = new \GuzzleHttp\Client;
        try {
            $response = $http->post($this->baseURL.'/oauth/token', 
            [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => 2,
                    'client_secret' => $this->clientSecret,
                    'username' => $authData->username,
                    'password' => $authData->password,
                ],
                'verify' => false
            ]);
            return [
                'data' => json_decode((string) $response->getbody(), true),
                'status' => true
            ];
        } catch (BadResponseException $e) {
            if ($e->getCode() === 400) {
                $response = $e->getResponse();
                $jsonBody = json_decode((string) $response->getBody(), true);
                return ['data' => $jsonBody, 'status' => $e->getCode()];
            } else if ($e->getCode() === 401) { 
                $response = $e->getResponse();
                $jsonBody = json_decode((string) $response->getBody(), true);
                return ['data' => $jsonBody, 'status' => $e->getCode()];
            }
            $response = $e->getResponse();
            $jsonBody = json_decode((string) $response->getBody(), true);
            return ['data' => $jsonBody, 'status' => $e->getCode()];
        }
    }

    public function logout($authData)
    {
        if (Auth::check()) {
            Auth::user()->AauthAcessToken()->delete();
        }
        return response()->json('Logged out successfully', 200);
    }
}

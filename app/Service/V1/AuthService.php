<?php

namespace App\Service\V1;

use App\Http\Requests\V1\Auth\CompleteEnrollmentAuthRequest;
use App\Http\Requests\V1\Auth\InitiateEnrollmentAuthRequest;
use App\Http\Requests\V1\Auth\LoginRequest;

class AuthService
{
    public function register_view(){
       return view("v1.auth.register-auth");
    }

    public function register(
        InitiateEnrollmentAuthRequest $initiateEnrollmentAuthRequest,
        CompleteEnrollmentAuthRequest $completeEnrollmentAuthRequest
    ){
        $initiateEnrollmentAuthRequest->validated();
    }

    public function login_view(){
        return view("v1.auth.login-auth");
    }

    public function login(LoginRequest $loginRequest){
        $loginRequest->validated();
    }
}

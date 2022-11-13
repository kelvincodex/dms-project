<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Auth\CompleteEnrollmentAuthRequest;
use App\Http\Requests\V1\Auth\InitiateEnrollmentAuthRequest;
use App\Http\Requests\V1\Auth\LoginRequest;
use App\Service\V1\AuthService;

class AuthController extends Controller
{
    public function __construct(protected AuthService $authService){

        }

        public function register_view(){
            return $this->authService->register_view();
        }

        public function register(
            InitiateEnrollmentAuthRequest $initiateEnrollmentAuthRequest,
            CompleteEnrollmentAuthRequest $completeEnrollmentAuthRequest
        ){
             $this->authService->register($initiateEnrollmentAuthRequest, $completeEnrollmentAuthRequest);
        }

        public function login_view(){
            return $this->authService->login_view();
        }

        public function login(LoginRequest $loginRequest){
             $this->authService->login($loginRequest);
        }

}

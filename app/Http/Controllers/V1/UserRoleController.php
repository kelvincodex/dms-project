<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\UserRole\CreateUserRoleRequest;
use App\Service\V1\UserRoleService;

class UserRoleController extends Controller
{
    public function __construct(protected UserRoleService $userRoleService)
    {
    }

    public function user_role_view(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return $this->userRoleService->user_role_view();
    }

    public function user_role_create(CreateUserRoleRequest $userRoleRequest){
        return $this->user_role_create($userRoleRequest);
    }
}

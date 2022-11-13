<?php

namespace App\Service\V1;

use App\Http\Requests\V1\UserRole\CreateUserRoleRequest;
use App\Models\V1\UserRole;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class UserRoleService
{
    public function user_role_view(): Factory|View|Application
    {
        return view("v1.dashboard.user-role.index");
    }

    public function user_role_create(CreateUserRoleRequest $userRoleRequest){

            $userRole = UserRole::create($userRoleRequest->validated());
            if (!$userRole){
                return response()->json([
                    "status"=>"404",
                    "data"=>"something went wrong!!"
                ]);
            }

        return response()->json([
            "status"=>"200",
            "data"=>"successful"
        ]);
    }
}

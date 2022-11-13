<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    protected $table ="user_roles";
    protected $primaryKey ="userRoleId";

    protected $fillable =[
        "userRoleName",
        "userRoleDescription",
        "userRoleStatus",
    ];

    public function users(){
        return $this->hasMany(User::class,
            "userRoleId",
            "userRoleId"
        );
    }
}

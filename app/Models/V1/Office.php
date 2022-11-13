<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $table ="offices";
    protected $primaryKey ="officeId";

    protected $fillable=[
        "officeName",
        "officeLocation",
        "officeStatus",
    ];

    public function doc_info(){
        return $this->hasMany(DocInfo::class,
            "docInfoOfficeId",
            "officeId"
        );
    }

    public function users(){
        return $this->hasMany(User::class,
            "userOfficeId",
            "officeId"
        );
    }

//    public function users(){
//        return $this->hasMany(User::class,
//            "userOfficeId",
//            "officeId"
//        );
//    }
}

<?php

namespace App\Models\V1;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userFirstName',
        'userLastName',
        'userRoleId',
        'userOfficeId',
        'userEmail',
        'userPassword',
        'userIsAdmin',
        'userIsSuperAdmin',
        'userStatus',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function doc_infos(): HasMany
    {
        return $this->hasMany(DocInfo::class,
            "docInfoUserId",
            "userId"
        );
    }

    public function user_roles(): BelongsTo
    {
        return $this->belongsTo(UserRole::class,
            "userRoleId",
            "roleId"
        );
    }

    public function offices(): BelongsTo
    {
        return $this->belongsTo(Office::class,
            "userOfficeId",
            "officeId"
        );
    }
}

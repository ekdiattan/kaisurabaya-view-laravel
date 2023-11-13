<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserProfile extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table ='userprofile';
    protected $primaryKey = 'UserProfileId';
    
    protected $fillable = [

        'UserName',
        'UserAddress',
        'UserGender',
        'UserRoleId',
        'UserPhone',
        'UserProfileCreatedBy',
        'UserProfileUpdatedBy',
        'UserProfileDeletedBy',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'UserRoleId', 'RoleId');
    }
    
    const CREATED_AT = 'UserProfileCreatedAt';
    const UPDATED_AT = 'UserProfileUpdatedAt';
    const DELETED_AT = 'UserProfileDeletedAt';
}

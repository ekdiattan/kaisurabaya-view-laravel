<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
    protected $table ='userprofile';
    protected $primaryKey = 'UserProfileId';
    
    protected $fillable = [
        'UserName',
        'UserAddres',
        'UserGender',
        'UserRoleId',
        'UserPhone'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'UserRoleId', 'RoleId');
    }
    
    const CREATED_AT = 'UserProfileCreatedAt';
    const UPDATED_AT = 'UserProfileUpdatedAt';
}

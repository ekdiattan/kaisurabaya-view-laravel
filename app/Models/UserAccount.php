<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserAccount extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'useraccount';
    protected $primaryKey = 'UserAccountId';
    
    protected $fillable = [
    
        'email',
        'password',
        'UserNameId',
        'UserRoleId',
        'UserAccountCreatedBy',
        'UserAccountUpdatedBy',
        'UserAccountDeletedBy',
    ];

    public function role()
    {
        return $this->belongsTo(HakAkses::class, 'UserRoleId', 'EmployeeId');
    }
    public function user(){
        return $this->belongsTo(UserProfile::class, 'UserNameId', 'UserProfileId');
    }

    const CREATED_AT = 'UserAccountCreatedAt';
    const UPDATED_AT = 'UserAccountUpdatedAt';

}
<?php

namespace App\Models;

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
        'UserAccountCreatedBy',
        'UserAccountUpdatedBy',
        'UserAccountDeletedBy',
    ];

    const CREATED_AT = 'UserAccountCreatedAt';
    const UPDATED_AT = 'UserAccountUpdatedAt';

}
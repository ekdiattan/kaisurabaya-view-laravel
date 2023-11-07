<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\Passport;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class UserAccount extends Authenticatable
{
    use HasFactory, HasApiTokens;

    protected $table = 'useraccount';

    protected $primaryKey = 'UserAccountId';
    
    protected $fillable = [
        'UserNameId',
        'UserEmail',
        'UserPassword',
    ];

    const CREATED_AT = 'UserAccountCreatedAt';
    const UPDATED_AT = 'UserAccountUpdatedAt';
}

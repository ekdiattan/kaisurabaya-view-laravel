<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserAccount extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'useraccount';

    protected $primaryKey = 'UserAccountId';
    
    protected $fillable = [
        'UserEmail',
        'UserPassword',
    ];

    const CREATED_AT = 'UserAccountCreatedAt';
    const UPDATED_AT = 'UserAccountUpdatedAt';

}
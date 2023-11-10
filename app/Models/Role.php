<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'RoleId';

    protected $table = 'masterroles';

    protected $fillable = [
    'RoleName',
    'RoleCode',
    
    ];

    const CREATED_AT = 'RoleCreatedAt';
    const UPDATED_AT = 'RoleUpdatedAt';
    const DELETED_AT = 'RoleDeletedAt';
}

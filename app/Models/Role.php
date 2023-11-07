<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

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

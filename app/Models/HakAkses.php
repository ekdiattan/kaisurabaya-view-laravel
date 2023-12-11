<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HakAkses extends Model
{
    use HasFactory;

    protected $table = 'masteremployee';
    protected $primaryKey = 'EmployeeId';

    protected $guarded = [
        'EmployeeCreatedAt',
        'EmployeeUpdatedAt',
    ];
    
    const CREATED_AT = 'EmployeeCreatedAt';
    const UPDATED_AT = 'EmployeeUpdatedAt';
}

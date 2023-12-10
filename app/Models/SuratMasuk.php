<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory; 
    protected $table = 'suratmasuk';
    protected $primaryKey = 'SuratMasukId';
    
    protected $guarded = [
        'SuratMasukCreatedAt',
        'SuratMasukUpdatedAt',
    ];

    const CREATED_AT = 'SuratMasukCreatedAt';
    const UPDATED_AT = 'SuratMasukUpdatedAt';
}

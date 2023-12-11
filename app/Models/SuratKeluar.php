<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;

    protected $table = 'suratkeluar';
    protected $primaryKey = 'SuratKeluarId';

    protected $guarded = [
        
        'SuratKeluarCreatedAt',
        'SuratKeluarUpdatedAt',
    ];

    const CREATED_AT = 'SuratKeluarCreatedAt';
    const UPDATED_AT = 'SuratKeluarUpdatedAt';
}

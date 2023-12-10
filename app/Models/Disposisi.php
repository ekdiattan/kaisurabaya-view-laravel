<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    use HasFactory;

    protected $table = 'disposisi';
    protected $primaryKey = 'DisposisiId';

    protected $guarded = [
        'DisposisiCreatedAt',
        'DisposisiUpdatedAt',
    ];

    const CREATED_AT = 'DisposisiCreatedAt';
    const UPDATED_AT = 'DisposisiUpdatedAt';

}

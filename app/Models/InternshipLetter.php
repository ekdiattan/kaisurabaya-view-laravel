<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InternshipLetter extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'internshipletter';

    protected $primaryKey = 'InternshipLetterId';

    protected $casts =[
        'StudentName' => 'array',
    ];
    
    protected $guarded = [
        
        'InternshipLetterCreatedAt',
        'InternshipLetterUpdatedAt',
        'InternshipLetterDeletedAt',        
    ];

    const CREATED_AT = 'InternshipLetterCreatedAt';
    const UPDATED_AT = 'InternshipLetterUpdatedAt';
    const DELETED_AT = 'InternshipLetterDeletedAt';

}

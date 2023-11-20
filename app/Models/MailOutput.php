<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MailOutput extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'mailoutput';

    protected $guarded = [
        'MailOutputCreatedAt',
        'MailOutputUpdatedAt',
        'MailOutputDeletedAt',
    ];
    
    const CREATED_AT = 'MailOutputCreatedAt';
    const UPDATED_AT = 'MailOutputUpdatedAt';
    const DELETED_AT = 'MailOutputDeletedAt';
}

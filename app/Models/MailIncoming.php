<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MailIncoming extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'mailincoming';

    protected $primarykey = 'MailIncomingId';

    protected $fillable = [
        
        'MailIncomingNumber',
        'MailIncomingRegarding',
        'MailIncomingType',
        'MailIncomingCreatedById',
        'MailIncomingUpdatedById',
    ];

    const CREATED_AT = 'MailIncomingCreatedAt';
    const UPDATED_AT = 'MailIncomingUpdatedAt';
    const DELETED_AT = 'MailIncomingDeletedAt';
}

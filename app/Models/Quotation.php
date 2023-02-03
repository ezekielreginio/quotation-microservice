<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quotation extends Model
{
    protected $table = 'quotations';
    // use SoftDeletes;
    protected $fillable = [
        'recipient_address',
        'message',
        'fk_payment_terms',
        'validity',
        'validity_type'
    ];

    
}

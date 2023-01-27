<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $table = 'quotations';

    protected $fillable = [
        'recipient_address',
        'message',
        'fk_payment_terms',
        'validity',
        'validity_type'
    ];
}

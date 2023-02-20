<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @OA\Schema(schema="Quotation", required={"recipient_address", "message", "fk_payment_terms", "validity", "validity_type"})
 */
class Quotation extends Model
{   
    use SoftDeletes;
    protected $table = 'quotations';
    
    /**
     * @OA\Property(
     *  type="string", 
     *  example="450 V.A. Rufino St. Makati City, Philippines 1015"
     * )
     * 
     * @var string
     */
    public $recipient_address;

    /**
     * @OA\Property(
     *  type="string", 
     *  example="We are pleased to offer you the following items for your order."
     * )
     *
     * @var string
     */
    public $message;

    /**
     * @OA\Property(
     *  type="string", 
     *  example="30"
     * )
     *
     * @var integer
     */
    public int $fk_payment_terms;

    /**
     * @OA\Property(
     *  type="string", 
     *  example="30"
     * )
     *
     * @var integer
     */
    public int $validity;

    /**
     * @OA\Property(
     *  type="string", 
     *  example="days"
     * )
     *
     * @var string
     */
    public $validity_type;

    protected $fillable = [
        'recipient_address',
        'message',
        'fk_payment_terms',
        'validity',
        'validity_type'
    ];

    
}

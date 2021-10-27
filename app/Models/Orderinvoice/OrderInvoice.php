<?php

namespace App\Models\Orderinvoice;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class OrderInvoice extends Model
{
    use SoftDeletes;

    public $table = 'OrderInvoices';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'invoice_no',
        'order_no',
        'next_invoice_date',
        'invoice_due_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'invoice_no' => 'string',
        'order_no' => 'string',
        'next_invoice_date' => 'string',
        'invoice_due_date' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}

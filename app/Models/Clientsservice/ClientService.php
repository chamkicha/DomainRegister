<?php

namespace App\Models\Clientsservice;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class ClientService extends Model
{
    use SoftDeletes;

    public $table = 'ClientServices';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'service_id',
        'payment_mode',
        'duration',
        'status',
        'created_by',
        'updated_by',
        'deleted_by',
        'domain'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'string',
        'service_id' => 'string',
        'payment_mode' => 'string',
        'duration' => 'string',
        'status' => 'string',
        'created_by' => 'string',
        'updated_by' => 'string',
        'deleted_by' => 'string',
        'domain' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}

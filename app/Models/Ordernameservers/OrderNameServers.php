<?php

namespace App\Models\Ordernameservers;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class OrderNameServers extends Model
{
    use SoftDeletes;

    public $table = 'OrderNameServers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name_server',
        'orde_no',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name_server' => 'string',
        'orde_no' => 'string',
        'user_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}

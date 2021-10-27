<?php

namespace App\Models\Fredclient;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class FredClient extends Model
{
    use SoftDeletes;

    public $table = 'FredClients';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'host',
        'port',
        'path',
        'transport',
        'e_p_p__u_s_e_r',
        'e_p_p__p_w_d'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'host' => 'string',
        'port' => 'string',
        'path' => 'string',
        'transport' => 'string',
        'e_p_p__u_s_e_r' => 'string',
        'e_p_p__p_w_d' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}

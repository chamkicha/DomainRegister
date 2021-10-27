<?php

namespace App\Models\Degistrantdetails;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class RegistrantDetail extends Model
{
    use SoftDeletes;

    public $table = 'registrant_details';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'mobile',
        'email',
        'fax',
        'physical_adress',
        'postal_adress',
        'city',
        'country',
        'created_by',
        'updated_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'string',
        'mobile' => 'string',
        'email' => 'string',
        'fax' => 'string',
        'physical_adress' => 'string',
        'postal_adress' => 'string',
        'city' => 'string',
        'country' => 'string',
        'created_by' => 'string',
        'updated_by' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}

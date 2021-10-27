<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingDetail extends Model
{
    use HasFactory;

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
}

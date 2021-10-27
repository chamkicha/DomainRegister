<?php

namespace App\Repositories\Registrant Billing;

use App\Models\Registrant Billing\BillingDetails;
use InfyOm\Generator\Common\BaseRepository;

class BillingDetailsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return BillingDetails::class;
    }
}

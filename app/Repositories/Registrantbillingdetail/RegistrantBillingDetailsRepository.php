<?php

namespace App\Repositories\Registrantbillingdetail;

use App\Models\Registrantbillingdetail\RegistrantBillingDetails;
use InfyOm\Generator\Common\BaseRepository;

class RegistrantBillingDetailsRepository extends BaseRepository
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
        return RegistrantBillingDetails::class;
    }
}

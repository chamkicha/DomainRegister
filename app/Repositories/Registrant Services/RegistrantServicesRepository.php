<?php

namespace App\Repositories\Registrant Services;

use App\Models\Registrant Services\RegistrantServices;
use InfyOm\Generator\Common\BaseRepository;

class RegistrantServicesRepository extends BaseRepository
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
        return RegistrantServices::class;
    }
}

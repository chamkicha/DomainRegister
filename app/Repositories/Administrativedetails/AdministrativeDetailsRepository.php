<?php

namespace App\Repositories\Administrativedetails;

use App\Models\Administrativedetails\AdministrativeDetails;
use InfyOm\Generator\Common\BaseRepository;

class AdministrativeDetailsRepository extends BaseRepository
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
        return AdministrativeDetails::class;
    }
}

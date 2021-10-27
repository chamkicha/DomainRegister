<?php

namespace App\Repositories\Registrant Administrative;

use App\Models\Registrant Administrative\AdministrativeDetails;
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

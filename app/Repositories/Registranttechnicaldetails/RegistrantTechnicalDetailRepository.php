<?php

namespace App\Repositories\Registranttechnicaldetails;

use App\Models\Registranttechnicaldetails\RegistrantTechnicalDetail;
use InfyOm\Generator\Common\BaseRepository;

class RegistrantTechnicalDetailRepository extends BaseRepository
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
        return RegistrantTechnicalDetail::class;
    }
}

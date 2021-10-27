<?php

namespace App\Repositories\Registrant Technical;

use App\Models\Registrant Technical\TechnicalDetails;
use InfyOm\Generator\Common\BaseRepository;

class TechnicalDetailsRepository extends BaseRepository
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
        return TechnicalDetails::class;
    }
}

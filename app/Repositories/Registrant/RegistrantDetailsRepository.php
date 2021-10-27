<?php

namespace App\Repositories\Registrant;

use App\Models\Registrant\RegistrantDetails;
use InfyOm\Generator\Common\BaseRepository;

class RegistrantDetailsRepository extends BaseRepository
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
        return RegistrantDetails::class;
    }
}

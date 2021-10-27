<?php

namespace App\Repositories\Client;

use App\Models\Client\Clientregistration;
use InfyOm\Generator\Common\BaseRepository;

class ClientregistrationRepository extends BaseRepository
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
        return Clientregistration::class;
    }
}

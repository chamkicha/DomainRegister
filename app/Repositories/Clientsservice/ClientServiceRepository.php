<?php

namespace App\Repositories\Clientsservice;

use App\Models\Clientsservice\ClientService;
use InfyOm\Generator\Common\BaseRepository;

class ClientServiceRepository extends BaseRepository
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
        return ClientService::class;
    }
}

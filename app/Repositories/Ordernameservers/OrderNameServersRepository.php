<?php

namespace App\Repositories\Ordernameservers;

use App\Models\Ordernameservers\OrderNameServers;
use InfyOm\Generator\Common\BaseRepository;

class OrderNameServersRepository extends BaseRepository
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
        return OrderNameServers::class;
    }
}

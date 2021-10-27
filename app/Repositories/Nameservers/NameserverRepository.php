<?php

namespace App\Repositories\Nameservers;

use App\Models\Nameservers\Nameserver;
use InfyOm\Generator\Common\BaseRepository;

class NameserverRepository extends BaseRepository
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
        return Nameserver::class;
    }
}

<?php

namespace App\Repositories\Fredclient;

use App\Models\Fredclient\FredClient;
use InfyOm\Generator\Common\BaseRepository;

class FredClientRepository extends BaseRepository
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
        return FredClient::class;
    }
}

<?php

namespace App\Repositories\Services;

use App\Models\Services\Services;
use InfyOm\Generator\Common\BaseRepository;

class ServicesRepository extends BaseRepository
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
        return Services::class;
    }
}

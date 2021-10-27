<?php

namespace App\Repositories\Degistrantdetails;

use App\Models\Degistrantdetails\RegistrantDetail;
use InfyOm\Generator\Common\BaseRepository;

class RegistrantDetailRepository extends BaseRepository
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
        return RegistrantDetail::class;
    }
}

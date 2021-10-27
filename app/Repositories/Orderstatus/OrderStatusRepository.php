<?php

namespace App\Repositories\Orderstatus;

use App\Models\Orderstatus\OrderStatus;
use InfyOm\Generator\Common\BaseRepository;

class OrderStatusRepository extends BaseRepository
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
        return OrderStatus::class;
    }
}

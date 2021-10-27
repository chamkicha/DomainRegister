<?php

namespace App\Repositories\Orderinvoice;

use App\Models\Orderinvoice\OrderInvoice;
use InfyOm\Generator\Common\BaseRepository;

class OrderInvoiceRepository extends BaseRepository
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
        return OrderInvoice::class;
    }
}

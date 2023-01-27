<?php

namespace App\Services;

use App\Repositories\QuotationRepository;

class QuotationService
{
    
    /**
     * Create a Quotation record
     *
     * @param array $data
     * @return array
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function createQuotation(array $data)
    {
        $repository = resolve(QuotationRepository::class);
        return $repository->insertQuotation($data);
    }
}
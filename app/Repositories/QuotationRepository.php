<?php

namespace App\Repositories;

use App\Models\Quotation;

class QuotationRepository
{
    /**
     * Inserts a quotation record into Quotations table 
     *
     * @param array $data
     * @return array
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function insertQuotation(array $data)
    {
        return Quotation::create($data);
    }
}
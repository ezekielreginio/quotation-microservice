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

    public function updateQuotation(array $data, int $id)
    {
 
        $quotation = Quotation::find($id);
        
        $quotation->update($data);

        return $quotation;
    }

    public function getAll()
    {
        return Quotation::all();
    }
    
    public function get(int $id)
    {
        return Quotation::find($id);
    }

    public function softDelete(int $id)
    {
        return Quotation::softDelete($id);
    }
}
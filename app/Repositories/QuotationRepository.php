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

    /**
     * Updates a specific quotation record 
     *
     * @param array $data
     * @param integer $id
     * @return void
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function updateQuotation(array $data, int $id)
    {
        return Quotation::find($id)->update($data);
    }

    /**
     * Fetches all the records from quotations table 
     *
     * @return void
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function getAll()
    {
        return Quotation::all();
    }
    
    /**
     * Fetches a specific record from quotations table
     *
     * @param integer $id
     * @return void
     */
    public function get(int $id)
    {
        return Quotation::find($id);
    }

    /**
     * Soft deletes a specific record from quotations table
     *
     * @param integer $id
     * @return void
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function deleteQuotation(int $id)
    {
        return Quotation::find($id)->delete();
    }
}
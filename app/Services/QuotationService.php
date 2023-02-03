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

    /**
     * Update a Quotation record
     *
     * @param array $data
     * @param integer $id
     * @return void
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function updateQuotation(array $data, int $id)
    {
        $repository = resolve(QuotationRepository::class);
        return $repository->updateQuotation($data, $id);
    }

    /**
     * Returns all quotation records
     *
     * @return array
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function getAll()
    {
        $repository = resolve(QuotationRepository::class);
        return $repository->getAll();
    }

    /**
     * Returns a single quotation record based on ID
     *
     * @param integer $id
     * @return array
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function getById(int $id)
    {
        $repository = resolve(QuotationRepository::class);
        return $repository->get($id);
    }

    /**
     * Soft deletes a record
     *
     * @param integer $id
     * @return void
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function delete(int $id)
    {
        $repository = resolve(QuotationRepository::class);
        return $repository->deleteQuotation($id);
    }
}
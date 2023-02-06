<?php

namespace App\Services;

use App\Repositories\QuotationRepository;

class QuotationService
{

    private QuotationRepository $quotationRepository;

    public function __construct(QuotationRepository $quotationRepository)
    {
        $this->quotationRepository = $quotationRepository;
    }
    
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
        return $this->quotationRepository->insertQuotation($data);
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
        return $this->quotationRepository->updateQuotation($data, $id);
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
        return $this->quotationRepository->getAll();
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
        return $this->quotationRepository->get($id);
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
        return $this->quotationRepository->deleteQuotation($id);
    }
}
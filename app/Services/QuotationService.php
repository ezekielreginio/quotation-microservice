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

    public function updateQuotation(array $data, int $id)
    {
        $repository = resolve(QuotationRepository::class);
        return $repository->updateQuotation($data, $id);
    }

    public function getAll()
    {
        $repository = resolve(QuotationRepository::class);
        return $repository->getAll();
    }

    public function getById(int $id)
    {
        $repository = resolve(QuotationRepository::class);
        return $repository->get($id);
    }

    public function delete(int $id)
    {
        $repository = resolve(QuotationRepository::class);
        return $repository->deleteQuotation($id);
    }
}
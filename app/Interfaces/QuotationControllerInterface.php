<?php

namespace App\Interfaces;

use App\Http\Requests\QuotationRequest;

interface QuotationControllerInterface
{
    /**
     * @author Ezekiel Reginio <ezekiel@1export.com>
     * 
     * Swagger UI Annotations
     * 
     * @OA\Post(
     *     tags={"Quotations"},
     *     path="/store",
     *     description="This API Endpoint stores quotations",
     *     operationId="store",
     *     @OA\RequestBody(
     *         description="Store Quotation",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(ref="#/components/schemas/Quotation")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     ),
     *     security={{"bearerAuth":{}}}
     * )
     */
    public function store(QuotationRequest $request);

    /**
     * @author Ezekiel Reginio <ezekiel@1export.com>
     * 
     * Swagger UI Annotations
     * 
     * @OA\Patch(
     *     tags={"Quotations"},
     *     path="/{quotation_id}",
     *     description="This API Endpoint updates a quotation using the specified record ID",
     *     operationId="patch",
     *     @OA\Parameter(
     *         name="quotation_id",
     *         in="path",
     *         description="Quotation ID",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         description="Patch Quotation",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(ref="#/components/schemas/Quotation")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     ),
     *     security={{"bearerAuth":{}}}
     * )
     */
    public function update(QuotationRequest $request, int $id);
}
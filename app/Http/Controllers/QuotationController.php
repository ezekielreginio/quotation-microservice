<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuotationRequest;
use App\Interfaces\QuotationControllerInterface;
use App\Services\QuotationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Tymon\JWTAuth\Facades\JWTAuth;

class QuotationController extends Controller implements QuotationControllerInterface
{
    
    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Quotations Microservices API Documentation",
     *      description="<div>This Swagger UI API documentation contains the list of all the API endpoints for the Quotations Microservice.</div> <br> This Microservice is developed and published using the following tech stack: <ul><li>Laravel</li> <li>PHP</li> <li>MySQL</li> <li>Docker</li> <li>Kubernetes</li></ul> <strong>Developers:</strong> <br> <br> Ezekiel S. Reginio - <a href='https://github.com/ezekielreginio'>https://github.com/ezekielreginio</a> <br> Joven P. Hilario IV - <a href='https://github.com/reddhilario'>https://github.com/reddhilario</a>",
     * )
     *
     * @OA\Server(
     *      url=L5_SWAGGER_CONST_HOST,
     *      description="Quotations Microservice Server"
     * )
     * 
     * @OA\Server(
     *      url=L5_SWAGGER_PROD,
     *      description="Quotations Microservice Production Server"
     * )
     *
     * @OA\Tag(
     *     name="Quotations",
     *     description="API Endpoints for Quotations Microservice"
     * )
     * 
     * 
     * @OA\SecurityScheme(
     *      securityScheme="bearerAuth",
     *      type="http",
     *      scheme="bearer",
     *      bearerFormat="JWT",
     * ),
     */

    private QuotationService $quotationService;

    /**
     * Constructor for QuotationController class
     *
     * @param QuotationService $quotationService
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function __construct(QuotationService $quotationService)
    {
        $this->quotationService = $quotationService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     * @author Ezekiel Reginio <ezekiel@1export.com>
     * 
     * {@inheritDoc}
     */
    public function store(QuotationRequest $request)
    {
        return response()->json($this->quotationService->createQuotation($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     * 
     */
    public function show(int $id)
    {
        
        return response()->json($this->quotationService->getById($id));
    }

    /**
     * Display all records from quotations table
     *
     * @return void
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function showAll()
    {
        return response()->json($this->quotationService->getAll());

        // dd(response()->json($service->getAll()));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     * 
     * {@inheritDoc}
     */
    public function update(QuotationRequest $request, int $id)
    {
        return response()->json($this->quotationService->updateQuotation($request->all(), $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * @author Redd Hilario <jhilarioiv@gmail.com>
     */
    public function destroy(int $id)
    {
        return response()->json($this->quotationService->delete($id));
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    // public function me(Request $request)
    // {
    //     $payload = JWTAuth::parseToken()->getPayload();
    //     return response()->json($payload);
    // }
}

<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\StoreTypeMeasureRequest;
use App\Http\Requests\Inventory\UpdateTypeMeasureRequest;
use App\Http\Resources\Inventory\TypeMeasureResource;
use App\Http\Services\ApiResponse;
use App\Models\Inventory\TypeMeasure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TypeMeasureController extends Controller
{
    protected ApiResponse $response;

    /**
     * @param ApiResponse $apiResponse
     */
    public function __construct(ApiResponse $apiResponse)
    {
        $this->middleware('auth:api', ['except' => ['']]);
        $this->response = $apiResponse;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        return $this->response->success(TypeMeasureResource::collection(TypeMeasure::get()));
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
     * @param  \App\Http\Requests\Inventory\StoreTypeMeasureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeMeasureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory\TypeMeasure  $typeMeasure
     * @return \Illuminate\Http\Response
     */
    public function show(TypeMeasure $typeMeasure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory\TypeMeasure  $typeMeasure
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeMeasure $typeMeasure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Inventory\UpdateTypeMeasureRequest  $request
     * @param  \App\Models\Inventory\TypeMeasure  $typeMeasure
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeMeasureRequest $request, TypeMeasure $typeMeasure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory\TypeMeasure  $typeMeasure
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeMeasure $typeMeasure)
    {
        //
    }
}

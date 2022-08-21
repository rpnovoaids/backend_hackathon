<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreMeterTypeRequest;
use App\Http\Requests\Order\UpdateMeterTypeRequest;
use App\Http\Resources\Order\MeterTypeResource;
use App\Http\Services\ApiResponse;
use App\Models\Order\MeterType;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MeterTypeController extends Controller
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
        return $this->response->success(MeterTypeResource::collection(MeterType::get()));
    }

    /**
     * @param StoreMeterTypeRequest $request
     * @return JsonResponse
     */
    public function store(StoreMeterTypeRequest $request): JsonResponse
    {
        $query = MeterType::where('name', $request->name);
        if ($query->count() > 0) {
            return $this->response->success(null, 'El Tipo de Medidor ya se encuentra registrado.');
        }
        return $this->response->success(new MeterTypeResource(MeterType::create([
            'name' => $request->name,
            'description' => $request->description,
            'state' => $request->state
        ])), 'OK', 201);
    }

    /**
     * @param MeterType $meterType
     * @return JsonResponse
     */
    public function show(MeterType $meterType): JsonResponse
    {
        return $this->response->success(new MeterTypeResource($meterType));
    }

    /**
     * @param MeterType $meterType
     * @return void
     */
    public function edit(MeterType $meterType)
    {
        //
    }

    /**
     * @param UpdateMeterTypeRequest $request
     * @param MeterType $meterType
     * @return JsonResponse
     */
    public function update(UpdateMeterTypeRequest $request, MeterType $meterType): JsonResponse
    {
        $meterType->update([
            'name' => $request->name,
            'description' => $request->description,
            'state' => $request->state
        ]);
        return $this->response->success();
    }

    /**
     * @param MeterType $meterType
     * @return JsonResponse
     */
    public function destroy(MeterType $meterType): JsonResponse
    {
        $meterType->update([
            'state' => false
        ]);
        return $this->response->success();
    }
}

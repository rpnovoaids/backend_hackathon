<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreMeterRequest;
use App\Http\Requests\Order\UpdateMeterRequest;
use App\Http\Resources\Order\MeterResource;
use App\Http\Services\ApiResponse;
use App\Models\OptionsModel;
use App\Models\Order\Meter;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MeterController extends Controller
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
        $query = Meter::where('id', '>', 0);
        if ($request->has('meterType')) {
            $query->where('meter_types_id', $request->get('meterType'));
        }
        if ($request->has('state')) {
            $query->where('state', $request->get('state'));
        }
        if ($request->has('order')) {
            $query->orderBy('created_at', $request->get('order'));
        }
        return $this->response->success(MeterResource::collection($query->get()));
    }

    /**
     *
     */
    public function create()
    {
        //
    }

    /**
     * @param StoreMeterRequest $request
     * @return JsonResponse
     */
    public function store(StoreMeterRequest $request): JsonResponse
    {
        $query = Meter::where('meter_types_id', OptionsModel::getId($request->meterType))
            ->where('meter_number', $request->meter_number);
        if ($query->count() > 0) {
            return $this->response->success(null, 'El Número de Medidor ya se encuentra registrado.');
        }
        return $this->response->success(new MeterResource(Meter::create([
            'meter_types_id' => $request->meterType,
            'meter_number' => $request->meter_number,
            'meter_status' => $request->meter_status,
            'state' => $request->state
        ])), 'OK', 201);
    }

    /**
     * @param Meter $meter
     * @return JsonResponse
     */
    public function show(Meter $meter): JsonResponse
    {
        return $this->response->success(new MeterResource($meter));
    }

    /**
     * @param Meter $meter
     * @return void
     */
    public function edit(Meter $meter)
    {
        //
    }

    /**
     * @param UpdateMeterRequest $request
     * @param Meter $meter
     * @return JsonResponse
     */
    public function update(UpdateMeterRequest $request, Meter $meter): JsonResponse
    {
        $meter->update([
            'meter_types_id' => $request->meterType,
            'meter_number' => $request->meter_number,
            'meter_status' => $request->meter_status,
            'state' => $request->state
        ]);
        return $this->response->success();
    }

    /**
     * @param Meter $meter
     * @return JsonResponse
     */
    public function destroy(Meter $meter): JsonResponse
    {
        $meter->update([
            'state' => false
        ]);
        return $this->response->success();
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function findFields(Request $request): JsonResponse
    {
        $query = Meter::where('id', '>', 0);
        if ($request->has('meterType')) {
            $query->where('meter_types_id', $request->get('meterType'));
        }
        if ($request->has('number')) {
            $query->where('meter_number', $request->get('number'));
        }
        $meter = $query->first() ? new MeterResource($query->first()) : null;
        return $this->response->success($meter);
    }
}

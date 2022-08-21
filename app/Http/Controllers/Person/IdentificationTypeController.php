<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\Person\StoreIdentificationTypeRequest;
use App\Http\Requests\Person\UpdateIdentificationTypeRequest;
use App\Http\Resources\Person\IdentificationTypeResource;
use App\Http\Services\ApiResponse;
use App\Models\Person\IdentificationType;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IdentificationTypeController extends Controller
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
        return $this->response->success(IdentificationTypeResource::collection(IdentificationType::get()));
    }

    /**
     * @param StoreIdentificationTypeRequest $request
     * @return JsonResponse
     */
    public function store(StoreIdentificationTypeRequest $request): JsonResponse
    {
        $query = IdentificationType::where('name', $request->name);
        if ($query->count() > 0) {
            return $this->response->success(null, 'El Tipo de Documento ya se encuentra registrado.');
        }
        return $this->response->success(new IdentificationTypeResource(IdentificationType::create([
            'name' => $request->name,
            'description' => $request->description,
            'state' => $request->state
        ])), 'OK', 201);
    }

    /**
     * @param IdentificationType $identificationType
     * @return JsonResponse
     */
    public function show(IdentificationType $identificationType): JsonResponse
    {
        return $this->response->success(new IdentificationTypeResource($identificationType));
    }

    /**
     * @param IdentificationType $identificationType
     * @return void
     */
    public function edit(IdentificationType $identificationType)
    {
        //
    }

    /**
     * @param UpdateIdentificationTypeRequest $request
     * @param IdentificationType $identificationType
     * @return JsonResponse
     */
    public function update(UpdateIdentificationTypeRequest $request, IdentificationType $identificationType): JsonResponse
    {
        $identificationType->update([
            'name' => $request->name,
            'description' => $request->description,
            'state' => $request->state
        ]);
        return $this->response->success();
    }

    /**
     * @param IdentificationType $identificationType
     * @return JsonResponse
     */
    public function destroy(IdentificationType $identificationType): JsonResponse
    {
        $identificationType->update([
            'state' => false
        ]);
        return $this->response->success();
    }
}

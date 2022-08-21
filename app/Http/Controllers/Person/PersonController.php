<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\Person\StorePersonRequest;
use App\Http\Requests\Person\UpdatePersonRequest;
use App\Http\Resources\Person\PersonResource;
use App\Http\Services\ApiResponse;
use App\Models\OptionsModel;
use App\Models\Order\Supplie;
use App\Models\Person\Person;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PersonController extends Controller
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
        $query = Person::where('id', '>', 0);
        if ($request->has('kind_person')) {
            $query->where('kind_person', $request->get('kind_person'));
        }
        if ($request->has('identificationType')) {
            $query->where('identification_types_id', $request->get('identificationType'));
        }
        if ($request->has('state')) {
            $query->where('state', $request->get('state'));
        }
        if ($request->has('order')) {
            $query->orderBy('created_at', $request->get('order'));
        }
        return $this->response->success(PersonResource::collection($query->get()));
    }

    /**
     *
     */
    public function create()
    {
        //
    }

    /**
     * @param StorePersonRequest $request
     * @return JsonResponse
     */
    public function store(StorePersonRequest $request): JsonResponse
    {
        $query = Person::where('identification_types_id', OptionsModel::getId($request->identificationType))
            ->where('identification_number', $request->number);
        if ($query->count() > 0) {
            return $this->response->success(null, 'El Número de Documento ya se encuentra registrado.');
        }
        return $this->response->success(new PersonResource(Person::create([
            'kind_person' => $request->kind_person,
            'identification_types_id' => $request->identificationType,
            'identification_number' => $request->identification_number,
            'name' => $request->name,
            'first_surname' => $request->first_surname,
            'second_surname' => $request->second_surname,
            'business_name' => $request->business_name,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'address' => $request->address,
            'first_phone' => $request->first_phone,
            'second_phone' => $request->second_phone,
            'state' => $request->state
        ])), 'OK', 201);
    }

    /**
     * @param Person $person
     * @return JsonResponse
     */
    public function show(Person $person): JsonResponse
    {
        return $this->response->success(new PersonResource($person));
    }

    /**
     * @param Person $person
     * @return void
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * @param UpdatePersonRequest $request
     * @param Person $person
     * @return JsonResponse
     */
    public function update(UpdatePersonRequest $request, Person $person): JsonResponse
    {
        $person->update([
            'kind_person' => $request->kind_person,
            'identification_types_id' => $request->identificationType,
            'identification_number' => $request->identification_number,
            'name' => $request->name,
            'first_surname' => $request->first_surname,
            'second_surname' => $request->second_surname,
            'business_name' => $request->business_name,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'address' => $request->address,
            'first_phone' => $request->first_phone,
            'second_phone' => $request->second_phone,
            'state' => $request->state
        ]);
        return $this->response->success();
    }

    /**
     * @param Person $person
     * @return JsonResponse
     */
    public function destroy(Person $person): JsonResponse
    {
        $person->update([
            'state' => false
        ]);
        return $this->response->success();
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function listClients(Request $request): JsonResponse
    {
        $query = Supplie::where('id', '>', 0);
        if ($request->has('kind_person')) {
            $query->where('kind_person', $request->get('kind_person'));
        }
        if ($request->has('identificationType')) {
            $query->where('identification_types_id', $request->get('identificationType'));
        }
        if ($request->has('state')) {
            $query->where('state', $request->get('state'));
        }
        if ($request->has('order')) {
            $query->orderBy('created_at', $request->get('order'));
        }
        return $this->response->success(PersonResource::collection($query->get()));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function findFields(Request $request): JsonResponse
    {
        $query = Person::where('id', '>', 0);
        if ($request->has('identificationType')) {
            $query->where('identification_types_id', $request->get('identificationType'));
        }
        if ($request->has('number')) {
            $query->where('identification_number', $request->get('number'));
        }
        $person = $query->first() ? new PersonResource($query->first()) : null;
        return $this->response->success($person);
    }
}

<?php

namespace App\Http\Resources\Person;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'kind_person' => $this->kind_person,
            'identificationType' => new IdentificationTypeResource($this->identificationType),
            'identification_number' => $this->identification_number,
            'name' => $this->name,
            'first_surname' => $this->first_surname,
            'second_surname' => $this->second_surname,
            'business_name' => $this->business_name,
            'birthday' => $this->birthday,
            'gender' => $this->gender,
            'address' => $this->address,
            'first_phone' => $this->first_phone,
            'second_phone' => $this->second_phone,
            'state' => (bool)$this->state,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

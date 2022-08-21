<?php

namespace App\Http\Resources\Inventory;

use Illuminate\Http\Resources\Json\JsonResource;

class RemittanceResource extends JsonResource
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
            'user' => $this->user,
            'provider' => new ProviderResource($this->provider),
            'remittance_date' => $this->remittance_date,
            'start_period' => $this->start_period,
            'end_period' => $this->end_period,
            'remittance_number' => $this->remittance_number,
            'type_care' => $this->type_care,
            'care_days' => $this->care_days,
            'number_users' => $this->number_users,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}

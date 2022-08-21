<?php

namespace App\Http\Resources\Order;

use Illuminate\Http\Resources\Json\JsonResource;

class SupplieResource extends JsonResource
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
            'person' => $this->person,
            'supply_number' => $this->supply_number,
            'services' => $this->services,
            'rate' => $this->rate,
            'billingType' => $this->billingType,
            'meter' => $this->meter,
            'active' => $this->active,
            'state' => $this->state
        ];
    }
}

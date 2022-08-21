<?php

namespace App\Http\Resources\Inventory;

use Illuminate\Http\Resources\Json\JsonResource;

class RemittanceDetailResource extends JsonResource
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
            'remittance' => $this->remittance,
            'product' => new ProductResource($this->product),
            'presentation' => $this->presentation,
            'bulk' => $this->bulk,
            'batch' => $this->batch
        ];
    }
}

<?php

namespace App\Http\Resources\Inventory;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductPresentationResource extends JsonResource
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
            'product' => $this->product,
            'typeMeasure' => new TypeMeasureResource($this->typeMeasure),
            'presentation' => $this->presentation,
            'bulk' => $this->bulk,
            'batch' => $this->batch,
            'active' => (bool)$this->active,
            'state' => (bool)$this->state
        ];
    }
}

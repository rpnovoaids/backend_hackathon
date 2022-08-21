<?php

namespace App\Http\Resources\Order;

use Illuminate\Http\Resources\Json\JsonResource;

class MeterHistoryResource extends JsonResource
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
            'supplies_id' => $this->supplies_id,
            'meters_id' => $this->meters_id,
            'instalation_date' => $this->instalation_date,
            'uninstall_date' => $this->uninstall_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}

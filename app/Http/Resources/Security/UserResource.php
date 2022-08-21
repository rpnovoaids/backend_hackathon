<?php

namespace App\Http\Resources\Security;

use App\Http\Resources\Person\PersonResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'person' => new PersonResource($this->person),
            'username' => $this->username,
            'password' => null,
            'confirm_password' => null,
            'email_verified_at' => $this->email_verified_at,
            'active' => $this->active,
            'state' => $this->state,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}

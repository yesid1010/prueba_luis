<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
                'type' => 'users',
                'id' => (string) $this->resource->id,
                'attributes' => [
                    'identification' => $this->resource->identification,
                    'name' => $this->resource->name,
                    'lastName' => $this->resource->lastName,
                    'dateOfBirth' => $this->resource->dateOfBirth,
                    'direction' => $this->resource->direction,
                    'phone' => $this->resource->phone,
                    'sex' => $this->resource->sex
                ]
            ];
    }
}

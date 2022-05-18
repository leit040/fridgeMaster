<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LocationResource extends JsonResource
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
            'name' => $this->name,
            'address' => $this->address,
            'support_contact' => $this->support_contact,
            'phone' => $this->phone,
            "pricePerHighLevel" => $this->pricePerHighLevel,
            "pricePerMediumLevel" => $this->pricePerMediumLevel,
            "pricePerLowLevel" => $this->pricePerLowLevel,
            'blocks'=>BlockResource::collection($this->blocks),
            'created_at'=>$this->created_at->format('Y-m-d'),
            'updated_at'=>$this->updated_at->format('Y-m-d'),


        ];
    }
}

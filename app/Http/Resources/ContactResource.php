<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
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
            'person_id' => $this->person->name,
            'type_contact_id' => $this->typeContact->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}

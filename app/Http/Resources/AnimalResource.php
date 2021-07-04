<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnimalResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'code' => $this->code,
            'born_date' => $this->born_date,
            'age_classification' => $this->age_classification,
            'sex' => $this->sex,
            'production_classification' => $this->production_classification,
            'breed' => $this->breed,
            'thumbnail' => $this->thumbnail,
            'mother_id' => $this->mother_id,
            'father_id' => $this->father_id,
            'responsible_id' => $this->responsible_id,
            'created_at' => format_date($this->created_at, 'd/m/Y'),

            'links' => [
                'edit' => $this->when(true, route('animal.edit', $this->id)),
                'show' => $this->when(true, route('animal.show', $this->id)),
                'destroy' => $this->when(true, route('animal.destroy', $this->id)),
            ],
        ];
    }
}

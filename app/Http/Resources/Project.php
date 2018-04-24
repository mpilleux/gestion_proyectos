<?php

namespace App\Http\Resources;

class Project extends AdditionableResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        $data = collect([
            'id' => $this->id,
            'slug' => $this->slug,
            'name' => $this->name,
            'active' => $this->active,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'deleted_by' => $this->deleted_by,
            'created_at' => $this->created_at ? $this->created_at->toDateTimeString() : null,
            'updated_at' => $this->updated_at ? $this->updated_at->toDateTimeString() : null,
            'deleted_at' => $this->deleted_at ? $this->deleted_at->toDateTimeString() : null
        ]);

        return $this->prepareForSend($request, $data);
    }
}
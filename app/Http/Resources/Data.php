<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class Data extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id' => $this->id,
            'email' => $this->email,
            'ip'    => $this->ip,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->form('d/m/Y'),
        ];
    }
}

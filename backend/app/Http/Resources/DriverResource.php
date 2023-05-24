<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DriverResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'primer_nombre' => ucfirst($this->first_name),
            'segundo_nombre' => ucfirst($this->second_name),
            'apellidos' => ucwords($this->last_name),
            'tipo_documento' => $this->typeDoc->code,
            'documento' => $this->document,
            'direccion' => $this->direction,
            'telefono' => $this->phone,
            'ciudad' => ucwords($this->city->title),
        ];
    }
}

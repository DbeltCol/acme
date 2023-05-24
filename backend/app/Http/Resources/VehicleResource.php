<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'placa' => $this->license_plate,
            'color' => $this->color,
            'marca' => $this->brand,
            'tipo_vehiculo' => $this->type,
            'conductor' => $this->driver,
            'propietario' => $this->owner,
        ];
    }
}

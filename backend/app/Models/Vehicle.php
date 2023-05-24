<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'license_plate',
        'brand',
        'color',
        'type',
        'driver_id',
        'owner_id'
    ];


    /**
     *
     * Accesors and mutators
     *
     */

    protected function license_plate(): Attribute
    {
        return new Attribute(
            set: fn ($value) => strtolower($value),
            get: fn ($value) => strtolower($value)
        );
    }

    protected function brand(): Attribute
    {
        return new Attribute(
            set: fn ($value) => strtolower($value),
            get: fn ($value) => strtolower($value)
        );
    }

    protected function color(): Attribute
    {
        return new Attribute(
            set: fn ($value) => strtolower($value),
            get: fn ($value) => strtolower($value)
        );
    }

    protected function type(): Attribute
    {
        return new Attribute(
            set: fn ($value) => strtolower($value),
            get: fn ($value) => strtolower($value)
        );
    }

    /**
     *
     * Relationships
     *
     */

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'second_name',
        'last_name',
        'document',
        'phone',
        'direction',
        'type_doc_id',
        'city_id'
    ];

    /**
     *
     * Accesors and mutators
     *
     */

    protected function first_name(): Attribute
    {
        return new Attribute(
            set: fn ($value) => strtolower($value),
            get: fn ($value) => ucwords($value)
        );
    }

    protected function second_name(): Attribute
    {
        return new Attribute(
            set: fn ($value) => strtolower($value),
            get: fn ($value) => ucwords($value)
        );
    }

    protected function last_name(): Attribute
    {
        return new Attribute(
            set: fn ($value) => strtolower($value),
            get: fn ($value) => ucwords($value)
        );
    }

    protected function document(): Attribute
    {
        return new Attribute(
            set: fn ($value) => strtolower($value),
            get: fn ($value) => strtolower($value)
        );
    }

    protected function phone(): Attribute
    {
        return new Attribute(
            set: fn ($value) => strtolower($value),
            get: fn ($value) => strtolower($value)
        );
    }


    protected function direction(): Attribute
    {
        return new Attribute(
            set: fn ($value) => strtolower($value),
            get: fn ($value) => strtoupper($value)
        );
    }


    /**
     *
     *   Relationships
     *
     */

    public function typeDoc()
    {
        return $this->belongsTo(TypeDoc::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     *
     * functions adds
     *
    */

    public function completeName()
    {
        return strtoupper($this->first_name.' '.$this->second_name.' '.$this->last_name);
    }
}

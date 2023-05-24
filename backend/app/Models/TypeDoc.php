<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDoc extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'code'];


    /**
     *
     * Accesors and mutators
     *
     */

    protected function title(): Attribute
    {
        return new Attribute(
            set: fn ($value) => strtolower($value),
            get: fn ($value) => strtolower($value)
        );
    }

    protected function code(): Attribute
    {
        return new Attribute(
            set: fn ($value) => strtolower($value),
            get: fn ($value) => strtoupper($value)
        );
    }
}

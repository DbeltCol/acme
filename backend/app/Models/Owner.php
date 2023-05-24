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

<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;


interface IStore
{
    public function store(array $array);
}

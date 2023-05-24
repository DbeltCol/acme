<?php

namespace App\Services;

use App\Interfaces\IStore;
use App\Models\Driver;
use Illuminate\Database\Eloquent\Collection;

class DriverStoreUseCase implements IStore
{
    public function store(array $data):Driver
    {
        return Driver::create($data);
    }
}

<?php

namespace App\Services;

use App\Interfaces\IStore;
use App\Models\Owner;
use Illuminate\Database\Eloquent\Collection;

class OwnerStoreUseCase implements IStore
{
    public function store(array $data):Owner
    {
        return Owner::create($data);
    }
}

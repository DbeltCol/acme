<?php

namespace App\Services;

use App\Interfaces\IStore;

class StoreService
{

    public function store(IStore $output,array $data)
    {
        return $output->store($data);
    }

}

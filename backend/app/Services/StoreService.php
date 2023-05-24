<?php

namespace App\Services;

use App\Interfaces\IStore;

class StoreService
{

    public function store(IStore $output,array $data):void
    {
        $output->store($data);
    }

}

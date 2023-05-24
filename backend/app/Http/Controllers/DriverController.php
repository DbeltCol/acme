<?php

namespace App\Http\Controllers;

use App\Http\Requests\DriverRequest;
use App\Http\Resources\DriverResource;
use App\Models\Driver;
use App\Services\DriverStoreUseCase;
use App\Services\StoreService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DriverController extends Controller
{
    private StoreService $storeService;

    public function __construct()
    {
        $this->storeService = new StoreService;
    }


    public function getDrivers()
    {
        return response([
            'drivers' => DriverResource::collection(Driver::all())
        ], Response::HTTP_ACCEPTED);
    }

    public function store(DriverRequest $request)
    {

        $data = [
            'first_name' => $request->first_name,
            'second_name' => $request->second_name,
            'last_name' => $request->last_name,
            'type_doc_id' => $request->type_doc_id,
            'document' => $request->document,
            'phone' => $request->phone,
            'direction' => $request->direction,
            'type_doc_id' => $request->type_doc_id,
            'city_id' => $request->city_id
        ];

        $driver = $this->storeService->store(new DriverStoreUseCase, $data);

        return response([
            'driver' => new DriverResource($driver)
        ], Response::HTTP_ACCEPTED);
    }
}

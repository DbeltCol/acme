<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataRequest;
use App\Models\Vehicle;
use App\Services\DriverStoreUseCase;
use App\Services\OwnerStoreUseCase;
use App\Services\StoreService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DataController extends Controller
{

    protected StoreService $storeService;

    public function __construct()
    {
        $this->storeService = new StoreService;
    }

    public function store(DataRequest $request)
    {
       $driver = $this->saveDriver($request);
       $owner = $this->saveOwner($request);

       if($driver && $owner)
       {
        Vehicle::create([
            'license_plate' => $request->license_plate,
            'brand' => $request->brand,
            'color' => $request->color,
            'type' => $request->type,
            'driver_id' => $driver->id,
            'owner_id' => $owner->id,
        ]);

        return response(['message' => 'Registro cargado exitosamente'], Response::HTTP_ACCEPTED);
       }
       return response(['error' => 'Fallo en la carga de información'], Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    public function saveDriver($request)
    {
        $driver = [

            'city_id' => $request->city_driver,
            'direction' => $request->direction_driver,
            'document' => $request->document_driver,
            'first_name' => $request->first_name_driver,
            'last_name' => $request->last_name_driver,
            'phone' => $request->phone_driver,
            'second_name' => $request->second_name_driver,
            'type_doc_id' => $request->type_doc_id_driver,

        ];
        return $this->executeStore(new DriverStoreUseCase,$driver);
    }

    public function saveOwner($request)
    {
        $driver = [

            'city_id' => $request->city,
            'direction' => $request->direction,
            'document' => $request->document,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'second_name' => $request->second_name,
            'type_doc_id' => $request->type_doc_id,

        ];
        return $this->executeStore(new OwnerStoreUseCase,$driver);
    }

    public function executeStore($model,array $array, )
    {
        return $this->storeService->store($model,$array);
    }


}

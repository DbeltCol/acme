<?php

namespace App\Http\Controllers;

use App\Http\Requests\OwnerRequest;
use App\Http\Resources\OwnerResource;
use App\Models\Owner;
use App\Services\OwnerStoreUseCase;
use App\Services\StoreService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OwnerController extends Controller
{

    private StoreService $storeService;

    public function __construct()
    {
        $this->storeService = new StoreService;
    }


    public function getOwners()
    {
        return response([
            'owners' => OwnerResource::collection(Owner::all())
        ], Response::HTTP_ACCEPTED);
    }

    public function store(OwnerRequest $request)
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


        $driver = $this->storeService->store(new OwnerStoreUseCase, $data);

        return response([
            'owner' => new OwnerResource($driver)
        ], Response::HTTP_ACCEPTED);
    }
}

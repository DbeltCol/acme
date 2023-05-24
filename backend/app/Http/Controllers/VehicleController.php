<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReportResource;
use App\Http\Resources\VehicleResource;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VehicleController extends Controller
{
    public function getVehicles()
    {
        return response([
            'vehicles' => VehicleResource::collection(Vehicle::all())
        ], Response::HTTP_ACCEPTED);
    }

    public function report()
    {
        return response([
            'reports' => ReportResource::collection(Vehicle::orderBy('id','DESC')->get())
        ], Response::HTTP_ACCEPTED);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CityController extends Controller
{

    public function getAll()
    {
        return response([
            'cities' => City::orderBy('title')->get()
        ], Response::HTTP_ACCEPTED);
    }
}

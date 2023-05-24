<?php

namespace App\Http\Controllers;

use App\Models\TypeDoc;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TypeDocController extends Controller
{
    public function getAll()
    {
        return response([
            'typeDocs' => TypeDoc::orderBy('title')->get()
        ], Response::HTTP_ACCEPTED);
    }
}

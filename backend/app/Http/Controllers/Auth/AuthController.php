<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login(Request $request)
    {

        if(Auth::attempt($request->only('email','password')))
        {

            $token = Auth::user()->createToken('admin')->accessToken;

            return response([
                'token' => $token
            ]);
        }

        return response([
            'message' => 'Credenciales invalidas'
        ], Response::HTTP_UNAUTHORIZED);
    }

    public function user()
    {
        return auth()->user();
    }
}

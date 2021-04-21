<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Excelimport;
use App\Models\Club;
use App\Models\Data;
use App\Models\University;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;

class ApiController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid credentials'], 400);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'somthing went wrong please try again letter'], 500);
        }

        return response()->json(compact('token'));
    }

    public function uplode(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xlsx,xls'
        ]);
        Excel::import(new Excelimport, $request->file('file'));
        return response(['status' => true, 'message' => 'data imported successfully'], 200);
    }

    public function getall()
    {
        return response([
            'status' => true,
            'data' => [
                'university' => University::all(),
                'sport' => Data::all(),
                'club' => Club::all()
            ]
        ]);
    }

    public function logout(Request $request)
    {
        $token = $request->header('Authorization');

        try {
            JWTAuth::invalidate($token);
            return response()->json([
                'status' => true,
                'message' => "User successfully logged out."
            ]);
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json([
                'status' => false,
                'message' => 'Failed to logout, please try again.'
            ], 500);
        }
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    //mehtods Register, Login, Profile ad Logout
    // Register Post [email, name, password]
    public function register(Request $request)
    {
        try {
            $request->validate([
                "name" => "required|string",
                "email" => "required|string|email",
                "password" => "required"
            ]);
        
            $user = New User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);

            if ($user->save()) {
                return response()->json([
                    "status" => true,
                    "message" => "User Register Successful",
                    "data" => []
                ]);
            } else {
                return"Operation Failed";
            }
        } catch (\Exception $e) {
            return response()->json([
                "status" => false,
                "message" => "An error occurred",
                "error" => $e->getMessage()
            ], 500);
        }      
        
    }

    //Login Post [email, password]
    public function login()
    {

    }

    //profile get[Auth : Token]
    public function profile()
    {

    }

    //logout get[Auth : Token]
    public function logout()
    {

    }
}

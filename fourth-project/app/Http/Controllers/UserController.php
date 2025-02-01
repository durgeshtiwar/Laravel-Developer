<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create(Request $request)
    {
        if ($request->isMethod("post")) {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|unique:users',
                'password' => 'required|min:4',
                // 'profile' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            $imageName = NULL;
            if (!empty($request->profile_image)) {
                $imageObj = $request->profile_image;
                $newImageName = time().'.'.$imageObj->getClientOriginalName();
                $imageObj->move(public_path("images"),$newImageName);
                $imageName = $newImageName;
            }
            User::create([
                "name"=>$request->name,
                "email"=>$request->email,
                "password"=>bcrypt($request->password),
                "profile_image"=>$imageName
            ]);
        }else{
            return view("create");
        }
        
    }
}

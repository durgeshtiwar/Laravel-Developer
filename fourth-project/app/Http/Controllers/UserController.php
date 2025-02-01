<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
    {
        if ($request->isMethod("post")) {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|unique:users',
                'password' => 'required|min:4',
                'profile' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
            
            return($request->file('profile'));
        }else{
            return view("create");
        }
        
    }
}

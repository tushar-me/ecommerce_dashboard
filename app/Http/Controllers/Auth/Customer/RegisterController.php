<?php

namespace App\Http\Controllers\Auth\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'reqired',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $token = $user->createToken('customner', ['role:customer'])->plainTextToken;
        $responseData = [
            'token' => $token,
            'user' => $user,
        ];

        return response()->json([
            'status' => 'success',
            'message' => 'Registration successful!',
            'data' => $responseData,
        ], 200);
    }
}

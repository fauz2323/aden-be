<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response(
                [
                    'message' => 'Invalid credentials',
                ],
                401,
            );
        }

        $token = $user->createToken('token')->plainTextToken;
        return response([
            'message' => 'Login successful',
            'token' => $token,
        ]);
    }

    function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'name' => 'required',
            'password' => 'required|min:8',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->type = 'user';
        $user->save();

        $token = $user->createToken('token')->plainTextToken;

        return response()->json([
            'message' => 'Registration successful',
            'token' => $token,
        ]);
    }

    function auth()
    {
        $user = User::find(Auth::user()->id);

        return response()->json([
            'message' => 'Auth successful',
            'user' => $user,
        ]);
    }

    function changePassword(Request $request) {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8',
        ]);

        $user = User::find(Auth::user()->id);
        if (!Hash::check($request->old_password, $user->password)) {
            return response()->json([
                'message' => 'Invalid old password',
            ], 401);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json([
            'message' => 'Password changed successfully',
        ]);
    }
}

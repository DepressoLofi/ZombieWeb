<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
    public function login(Request $request){
        $credential = $request->only('email', 'password');

        try {
            if (!$token = JWTAuth::attempt($credential)){
                return response()->json(['error' => 'Invalid credentials'], 401);
            }

        } catch (JWTException $e){
            return response()->json(['error' => 'Could not create token'], 500);
        }

        return response()->json(compact('token'));

    }

    public function register(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'username' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' =>'required|string',
            ]);

            $validatedData['password'] = Hash::make($validatedData['password']);

            $user = User::create($validatedData);

            $token = JWTAuth::fromUser($user);

            return response()->json(['token'=> $token]);
        } catch (ValidationException $e) {
            return response() ->json(['error' => $e->errors()], 422);
        }

    }

    public function me()
    {
        try {
            // Get the authenticated user
            $user = JWTAuth::parseToken()->authenticate();

            if (!$user) {
                return response()->json(['error' => 'User not found'], 404);
            }

            // Return user information in JSON
            return response()->json(['user' => $user]);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function logout(){
        try {
            JWTAuth::invalidate(JWTAuth::getToken());
            return response()->json(['message' => 'logout success']);
        } catch(JWTException $e){
            return response()->json(['error' => 'Fail to logout'], 500);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('is_admin', '!=', 'admin')->get();
        return response()->json([
            'message' => 'get users',
            'status' => 'success',
            'users' => $user
        ]);
    }

    public function show(User $user)
    {
        return response()->json([
            'message' => 'get a single user',
            'status' => 'success',
            'user' => $user
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json([
            'message' => 'delete user',
            'status' => 'success',
        ]);
    }
}

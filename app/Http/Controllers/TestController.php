<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getUser(): JsonResponse
    {
        $users = User::all();
    
        return response()->json($users, 200);
    }
}

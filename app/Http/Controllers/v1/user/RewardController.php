<?php

namespace App\Http\Controllers\v1\user;

use App\Http\Controllers\Controller;
use App\Reward;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function reward()
    {
        $reward= Reward::all();

        return response()->json([
            'message' => 'successfully get reward',
            'status' => true,
            'data' => $reward
        ]);
    }
}

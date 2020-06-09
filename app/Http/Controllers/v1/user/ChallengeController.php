<?php

namespace App\Http\Controllers\v1\user;

use App\Challenge;
use App\Http\Controllers\Controller;
use App\Program;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChallengeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function challenge(Request $request)
    {

        $challenge= new Challenge();
        $challenge->id_user = Auth::guard('api')->user()->id;
        $challenge->id_program = $request->id_program;
        $challenge->link = $request->link;
        $challenge->status = 'belum di acc';

        $program = Program::where('id', $request->id_program)->first();
        $week = Carbon::parse($program->tanggal_mulai_pengumpulan)->weekNumberInMonth;
        $weeknow = Carbon::now()->weekNumberInMonth;

        if ($weeknow == $week){
            $challenge->point = 500;
        }elseif ($weeknow == $week + 2){
            $challenge->point = 300;
        }elseif ($weeknow == $week + 3){
            $challenge->point = 100;
        }else{
            $challenge->point = 0;
        }
        $challenge->save();

        return response()->json([
            'message' => 'successfully get reward',
            'status' => true,
            'data' => $challenge
        ]);
    }
}

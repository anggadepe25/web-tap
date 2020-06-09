<?php

namespace App\Http\Controllers\v1\user;

use App\Http\Controllers\Controller;
use App\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function program()
    {
        $program = Program::all();
        return response()->json([
            'message' => 'Berhasil mengambil data',
            'status' => true,
            'data' => $program
        ]);
    }
}

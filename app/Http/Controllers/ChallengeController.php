<?php

namespace App\Http\Controllers;

use App\Challenge;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $datas = Challenge::all();
        return view('pages.challenge.challenge', compact('datas'));
    }

    public function konfirmasi($id)
    {
        $data = Challenge::findOrFail($id);
        $data->status = 'di konfirmasi';
        $data->update();

        return redirect()->route('challenge');
    }

    public function tolak($id)
    {
        $data = Challenge::findOrFail($id);
        $data->status = 'di tolak';
        $data->update();

        return redirect()->route('challenge');
    }
}

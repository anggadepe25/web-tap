<?php

namespace App\Http\Controllers;

use App\Challenge;
use App\User;
use Illuminate\Http\Request;

class DashboardControler extends Controller
{

        public function __construct()
        {
            $this->middleware('auth:admin');
        }

    public function index()
    {
        $users = User::all()->count();
        $point = Challenge::all()->max('point');
        return view('pages.dashboard', compact('users', 'users', 'point'));
    }
}

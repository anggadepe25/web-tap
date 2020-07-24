<?php

namespace App\Http\Controllers;

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
        $users = User::all();
        return view('pages.dashboard', compact('users'));
    }
}

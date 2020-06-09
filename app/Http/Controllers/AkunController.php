<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AkunController extends Controller
{
    public function index()
    {
        $datas = User::all();
        return view('pages.user.index', compact('datas'));
    }

    public function create()
    {
        return view('pages.user.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->nama = $request->nama;
        $user->nohp = $request->nohp;
        $user->email = $request->email;
        $user->password = Hash::make($request->nohp);
        $user->tgl_lahir = $request->tgl_lahir;
        $user->branch = $request->branch;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->tempat_tinggal = $request->tempat_tinggal;
        $user->kampus = $request->kampus;
        $user->api_token = Str::random(80);
        $user->save();

        return redirect()->route('user');
    }

}

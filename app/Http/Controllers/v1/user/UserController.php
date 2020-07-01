<?php

namespace App\Http\Controllers\v1\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function profile()
    {
        $user = Auth::guard('api')->user();

        return response()->json([
            'messge' => 'success',
            'status' => true,
            'data' => $user
        ]);
    }

    public function updateProfil(Request $request)
    {

        $image=$request->file('foto');
        $filename=rand().'.'.$image->getClientOriginalExtension();
        $path=public_path('uploads/user');
        $image->move($path,$filename);

        $user = Auth::guard('api')->user();
        $user->nama = $request->nama;
        $user->foto = $filename;
        $user->no_hp = $request->no_hp;
        $user->password = $request->password;
        $user->tempat_tinggal = $request->tempat_tinggal;
        $user->kampus = $request->kampus;
        $user->jurusan = $request->jurusan;
        $user->semester = $request->semester;
        $user->hobi = $request->hobi;
        $user->instagram = $request->instagram;
        $user->save();

        return response()->json([
            'messge' => 'success',
            'status' => true,
        ]);
    }
}

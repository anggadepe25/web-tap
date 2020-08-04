<?php

namespace App\Http\Controllers\v1\user;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
            'data' => new UserResource($user)
        ]);
    }

    public function updateProfil(Request $request)
    {
        $user = Auth::guard('api')->user();
        $user->nama = $request->nama;
        $user->nohp = $request->nohp;
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
            'data' => (object)[]
        ]);
    }

    public function updatePhoto(Request $request){

        $image = $request->file('foto');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $filepath = 'admin/' . $filename;
        Storage::disk('s3')->put($filepath, file_get_contents($image));


        $user = Auth::guard('api')->user();
        $user->foto = Storage::disk('s3')->url($filepath, $filename);
        $user->save();

        return response()->json([
            'messge' => 'success',
            'status' => true,
            'data' => (object)[]
        ]);
    }

    public function updatePassword(Request $request){
        $user = Auth::guard('api')->user();
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json([
            'messge' => 'success',
            'status' => true,
            'data' => (object)[]
        ]);

    }
}

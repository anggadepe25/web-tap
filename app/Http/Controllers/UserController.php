<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
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

    public function edit($id)
    {
        $data = User::find($id);
        return view('pages.user.edit', compact('data'));
    }


    public function store(Request $request)
    {
        $validasi = [
            'nama' =>'required|regex:/^[\pL\s\-]+$/u||min:5',
            'nohp' =>'required|numeric|digits_between:11,13|regex:/(08)[0-9]{9}/|unique:users',
            'email' =>'required|unique:users|email',
            'tgl_lahir' =>'required',
            'branch' =>'required',
            'jenis_kelamin' =>'required',
            'tempat_tinggal' =>'required',
            'kampus' =>'required',
        ];

        $message = [
            'required' => ':Attribute Tidak Boleh Kosong',
            'unique' => ':Attribute Sudah Terdaftar',
            'email'     => ':Attribute Harus Sesuai Format Email',
            'nohp.regex'     => ':Attribute Harus Sesuai Format 08xx-xxxx-xxxx',
            'nama.regex'     => ':Attribute Harus Huruf'
        ];

        $this->validate($request, $validasi,$message);

        $akun = new User();
        $akun->nama = $request->nama;
        $akun->nohp = $request->nohp;
        $akun->email = $request->email;
        $akun->password = Hash::make($request->nohp);
        $akun->tgl_lahir = $request->tgl_lahir;
        $akun->branch = $request->branch;
        $akun->jenis_kelamin = $request->jenis_kelamin;
        $akun->tempat_tinggal = $request->tempat_tinggal;
        $akun->kampus = $request->kampus;
        $akun->api_token = Str::random(80);
        $akun->save();

        return redirect()->route('user');
    }

    public function update(Request $request, $id)
    {
        $data =User ::find($id);
        $data->judul = $request->judul;
        $image=$request->file('gambar');
        $data->deskripsi = $request->deskripsi;

        if ($image==''){
            $data->gambar = $request->old_gambar;
        }else{
            $filename=time().'.'.$image->getClientOriginalExtension();
            $path=public_path('uploads/admin');
            $image->move($path,$filename);

            $data->gambar = $filename;


        }

        $data->update();
        return redirect()->route('user')->with('update','Berhasil Mengubah Data');
    }

    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('user')->with('delete','Berhasil Menghapus Data');
    }

}

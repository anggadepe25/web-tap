<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $datas = News::all();
        return view('pages.news.news', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = [
            'judul' =>'required',
            'gambar' =>'required|file|image|mimes:jpg,png,jpeg|max:2048' ,
            'deskripsi' =>'required',
        ];

        $message = [
            'required' => ':Attribute Tidak Boleh Kosong',
            'mimes' => ':Atribute Tidak Boleh Kosong',
        ];

        $this->validate($request, $validasi,$message);

        $image = $request->file('gambar');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $filepath = 'admin/' . $filename;
        Storage::disk('s3')->put($filepath, file_get_contents($image));

        //Menambah Data
        $data = new News();
        $data->judul = $request->judul;
        $data->gambar = Storage::disk('s3')->url($filepath, $filename);
        $data->deskripsi = $request->deskripsi;
        $data->save();

        return redirect()->route('news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = News::find($id);
        return view('pages.news.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validasi = [
            'judul' =>'required',
            'gambar' =>'required|file|image|mimes:jpg,png,jpeg|max:2048' ,
            'deskripsi' =>'required',
        ];

        $message = [
            'required' => ':Attribute Tidak Boleh Kosong',
            'mimes' => ':Atribute Tidak Boleh Kosong',
        ];

        $this->validate($request, $validasi,$message);



        $data = News::find($id);
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;
        $image=$request->file('gambar');
        if ($image==''){
            $data->gambar = $request->old_gambar;
        }else{
            $filename=time().'.'.$image->getClientOriginalExtension();
            $path=public_path('uploads/admin');
            $image->move($path,$filename);

            $data->gambar = $filename;
        }

        $data->update();
        return redirect()->route('news')->with('update','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = News::find($id);
        $data->delete();
        return redirect()->route('news')->with('delete','Berhasil Menghapus Data');
    }
}

<?php

namespace App\Http\Controllers;

use App\Program;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\VarDumper\Cloner\Data;

class ProgramController extends Controller
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
        $datas = Program::all();
        return view('pages.program.program', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.program.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'judul' =>'required',
            'gambar' =>'file|image|mimes:jpg,png,jpeg|max:2048',
            'panduan' =>'required',
            'tanggal_mulai_pengumpulan' =>'required',
        ]);

//        $image = $request->file('gambar');
//        $filename = rand().'.'.$image->getClientOriginalExtension();
//        $path=public_path('uploads/admin');
//        $image->move($path, $filename);

        $image = $request->file('gambar');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $filepath = 'admin/' . $filename;
        Storage::disk('s3')->put($filepath, file_get_contents($image));

        $data = new Program();
        $data->judul = $request->judul;
        $data->gambar = Storage::disk('s3')->url($filepath, $filename);
        $data->panduan = $request->panduan;
        $data->tanggal_mulai_pengumpulan = $request->tanggal_mulai_pengumpulan;
        $data->tanggal_selesai_pengumpulan = Carbon::parse($request->tanggal_mulai_pengumpulan)->addMonths(1);
        $data->save();

        return redirect()->route('program');
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
        $data = Program::find($id);
        return view('pages.program.edit', compact('data'));
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
        $this->validate($request, [
            'program' =>'required',
            'gambar' =>'file|image|mimes:jpg,png,jpeg|max:2048',
            'panduan' =>'required',
            'tanggal_pengumpulan' =>'required',
        ]);


        $data = Program::find($id);
        $data->judul = $request->judul;
        $data->panduan = $request->panduan;
        $data->tanggal_pengumpulan = $request->tanggal_pengumpulan;
        $image = $request->file('gambar');
        if ($image== ''){
            $data->gambar=$request->old_gambar;
        }else{
            $filename=time().'.'.$image->getClientOriginalExtension();
            $path=public_path('uploads/admin');
            $image->move($path,$filename);
            $data->gambar = $filename;
        }

        $data->update();
        return redirect()->route('program')->with('update','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Program::find($id);
        $data->delete();
        return redirect()->route('program')->with('delete','Berhasil Menghapus Data');
    }
}

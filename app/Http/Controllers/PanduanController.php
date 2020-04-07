<?php

namespace App\Http\Controllers;

use App\Panduan;
use Illuminate\Http\Request;use Illuminate\Support\Facades\App;

class PanduanController extends Controller
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
        $datas = Panduan::all();
        return view('pages.panduan.panduan', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'deskripsi' =>'required',
        ]);

        $data = new Panduan();
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;
        $data->save();

        return redirect()->route('panduan');
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
        //
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
            'judul' =>'required',
            'deskripsi' =>'required',
        ]);

        $data = Panduan::find($id);
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;


        $data->update();
        return redirect()->route('panduan')->with('update','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Panduans::find($id);
        $data->delete();
        return redirect()->route('panduan')->with('delete','Berhasil Menghapus Data');
    }
}

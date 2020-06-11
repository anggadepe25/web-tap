<?php

namespace App\Http\Controllers;

use App\Reward;
use Illuminate\Http\Request;

class RewardController extends Controller
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
        $datas = Reward::all();
        return view('pages.reward.reward', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.reward.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validasi
        $this->validate($request,[
            'judul' =>'required',
            'keterangan' =>'required',
        ]);

        //Menambah Data
        $data = new Reward();
        $data->judul = $request->judul;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect()->route('reward');
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
        $data=Reward::find($id);
        return view('pages.reward.edit',compact('data'));
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
        $data = Reward::find($id);
        $data->judul = $request->judul;
        $data->keterangan = $request->keterangan;

        $data->update();
        return redirect()->route('reward')->with('update','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Reward::find($id);
        $data->delete();
        return redirect()->route('reward')->with('delete','Berhasil Menghapus Data');
    }
}

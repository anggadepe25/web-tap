<?php

namespace App\Http\Controllers;

use App\Challenge;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function pdf()
    {
        $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli',
            'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $month = request()->get('month');
        $datas = null;

        if ($month){
            $keyMonth = (integer)$month + 1;
            $datas = Challenge::whereMonth('created_at', $keyMonth)->get();
        }else{
            $datas = Challenge::all();
        }

        $pdf =PDF::loadview('pages.challenge.pdf', compact('datas'));
        return $pdf->stream();
    }

    public function index()
    {
        $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli',
            'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $datas = Challenge::all();
        return view('pages.challenge.challenge', compact('datas', 'months'));
    }

    public function search(Request $request){
        $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli',
            'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        if ($request->month == 'semua'){
            $datas = Challenge::all();
            $keyMonth= 0;
        }else{
            $keyMonth = (integer)$request->month + 1;
            $datas = Challenge::whereMonth('created_at', $keyMonth)->get();
            $keyMonth -= 1;
        }
        return view('pages.challenge.challenge', compact('datas', 'months', 'keyMonth'));
    }

    public function konfirmasi($id)
    {
        $data = Challenge::findOrFail($id);
        $data->status = 'di konfirmasi';
        $data->update();

        return redirect()->route('challenge');
    }

    public function tolak($id)
    {
        $data = Challenge::findOrFail($id);
        $data->status = 'di tolak';
        $data->update();
        return redirect()->route('challenge');
    }
}

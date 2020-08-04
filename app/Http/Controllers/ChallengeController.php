<?php

namespace App\Http\Controllers;

use App\Challenge;
use App\Program;
use Carbon\Carbon;
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

        $datas = Challenge::where('status', 'belum di acc')->get();
        return view('pages.challenge.challenge', compact('datas', 'months'));
    }

    public function searchkonfirmasi(Request $request){
        $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli',
            'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        if ($request->month == 'semua'){
            $datas = Challenge::all();
            $keyMonth= 0;
        }else{
            $keyMonth = (integer)$request->month + 1;
            $datas = Challenge::where('status', 'di konfirmasi')->whereMonth('created_at', $keyMonth)->get();
            $keyMonth -= 1;
        }
        return view('pages.challenge.searchkonfirmasi', compact('datas', 'months', 'keyMonth'));
    }

    public function searchtolak(Request $request){
        $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli',
            'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        if ($request->month == 'semua'){
            $datas = Challenge::all();
            $keyMonth= 0;
        }else{
            $keyMonth = (integer)$request->month + 1;
            $datas = Challenge::where('status', 'di tolak')->whereMonth('created_at', $keyMonth)->get();
            $keyMonth -= 1;
        }
        return view('pages.challenge.searchtolak', compact('datas', 'months', 'keyMonth'));
    }

    public function datakonfirmasi()
    {
        $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli',
            'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $datas = Challenge::where('status', 'di konfirmasi')->get();
        return view('pages.challenge.datakonfirmasi', compact('datas', 'months'));
    }


    public function konfirmasi($id)
    {
        $data = Challenge::findOrFail($id);
        $program = Program::where('id', $data->id_program)->first();
        $week = Carbon::parse($program->tanggal_mulai_pengumpulan)->weekNumberInMonth;
        $weeknow = Carbon::now()->weekNumberInMonth;

        if ($weeknow == $week){
            $data->point = 500;
        }elseif ($weeknow == $week + 2){
            $data->point = 300;
        }elseif ($weeknow == $week + 3){
            $data->point = 100;
        }else{
            $data->point = 0;
        }
        $data->status = 'di konfirmasi';
        $data->update();

        return redirect()->route('challenge');
    }

    public function datatolak()
    {
        $months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli',
            'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $datas = $datas = Challenge::where('status', 'di tolak')->get();
        return view('pages.challenge.datatolak', compact('datas', 'months'));
    }

    public function tolak($id)
    {
        $data = Challenge::findOrFail($id);
        $data->status = 'di tolak';
        $data->update();
        return redirect()->route('challenge');
    }
}

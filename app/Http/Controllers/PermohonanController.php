<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permohonan;
use Illuminate\Support\Facades\DB;

class PermohonanController extends Controller
{
    public function indexc1()
    {
        return view('validasi', [
            'permohonan'   => Permohonan::where('kelas','si-c1')->where('validasi','0')->get(),
            'counter' => 1,
            'title' => 'SI-C1'
        ]);
    }

    public function indexc2()
    {
        return view('validasi', [
            'permohonan'   => Permohonan::where('kelas','si-c2')->where('validasi','0')->get(),
            'counter' => 1,
            'title' => 'SI-C2'
        ]);
    }

    public function indexc3()
    {
        return view('validasi', [
            'permohonan'   => Permohonan::where('kelas','si-c3')->where('validasi','0')->get(),
            'counter' => 1,
            'title' => 'SI-C3'
        ]);
    }

    public function approve($id){
        DB::table('permohonans')
            ->where('id', $id)
            ->update(['validasi' => '1']);

        return redirect('/dashboard-validasi-sic1')->with('approved','Permohonan Berhasil Divalidasi');
    }

    public function decline($id){
        DB::table('permohonans')
            ->where('id', $id)
            ->update(['validasi' => '2']);

        return redirect('/dashboard-validasi-sic1')->with('declined','Permohonan Ditolak');
    }
}

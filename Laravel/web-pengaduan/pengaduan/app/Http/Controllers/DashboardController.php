<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aduan;
use App\Pengadu;
use App\Pejabat;
use App\Komentar;

class DashboardController extends Controller
{
    public function index ()
    {
        
        $aduan = aduan::all();
        $pengadu = pengadu::all();
        $pejabat = pejabat::all();
        $komentar = komentar::all();
        
        return view('/dashboard.index',['aduan'=>$aduan,'pengadu'=>$pengadu,'pejabat'=>$pejabat,'komentar'=>$komentar ]);
    }
}

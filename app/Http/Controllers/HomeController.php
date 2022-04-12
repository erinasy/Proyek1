<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\PolaMakan;

class HomeController extends Controller
{
    
    public function index(){
        $dokter = Dokter::all();
        $pola_makan = PolaMakan::all();
        return view('home',['dokter'=>$dokter],['polaMakan'=>$pola_makan]);
    }
}

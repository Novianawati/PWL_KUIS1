<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class PegawaiController extends Controller
{
    public function pg(){
        $data = pegawai::all();
        return view('home', ['pgw' => $data]);
    }
}

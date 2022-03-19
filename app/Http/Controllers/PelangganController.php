<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;

class PelangganController extends Controller
{
    public function pl(){
        $data = pelanggan::all();
        return view('racingboots', ['plg' => $data]);
    }
}

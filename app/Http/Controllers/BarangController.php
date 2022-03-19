<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;

class BarangController extends Controller
{
    public function br(){
        $data = barang::all();
        return view('shoes', ['brg' => $data]);
    }
}

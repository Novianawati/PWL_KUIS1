<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablesupplierController extends Controller
{
    public function s(){
        $data = tablesupplier::all();
        return view('collection', ['supp' => $data]);
    }
}

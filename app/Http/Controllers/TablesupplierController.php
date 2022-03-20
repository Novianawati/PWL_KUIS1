<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tablesupplier;

class TablesupplierController extends Controller
{
    public function s(){
        $data = tablesupplier::all();
        return view('collection', ['supp' => $data]);
    }
}

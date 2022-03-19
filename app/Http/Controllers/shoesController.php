<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shoesController extends Controller
{
    public function bestshoes(){
        return "Best Shoes - Nike";
    }
    public function sportshoes(){
        return "Sport Shoes - Puma";
    }
}

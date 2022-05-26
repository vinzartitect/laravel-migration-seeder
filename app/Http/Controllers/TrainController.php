<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    //Rotta localhost/trains
    public function index(){
        return view( 'pages.trains.index' );
    }
}

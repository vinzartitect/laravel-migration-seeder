<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    //Rotta localhost/trains
    //Dove mostreremo tutti i dati del DB
    public function index(){

        //Ottenere i dati del DB
        $trains = Train::all();

        return view( 'pages.trains.index', compact('trains') );
    }
}

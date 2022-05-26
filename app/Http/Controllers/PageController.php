<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view( 'pages.home' );
    }

    public function aboutUs(){
        return view( 'pages.aboutUs' );
    }

    public function contacts(){
        return view( 'pages.contacts' );
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listingController extends Controller
{
     public function listing(){
        return view('listing');
    }
}

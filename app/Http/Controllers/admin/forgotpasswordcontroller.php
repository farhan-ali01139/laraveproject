<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class forgotpasswordcontroller extends Controller
{
      public function forgotpassword(){
        return view('admin.forgotpassword');
    }
}

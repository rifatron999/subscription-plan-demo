<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function pricing(Request $request){
        return view('pricing');
    }
}

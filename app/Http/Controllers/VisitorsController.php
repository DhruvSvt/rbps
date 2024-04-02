<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    public function index(Request $request){
        $slug = $request->slug ?? 'index';
        return view('visitors.'.$slug);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(Request $request){
        session()->flash('alert_message','Lorem,ipsum');
       return view('pages.index');
}
public function about(){
    return view('pages.about');
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function index(){
        $data["names"]=["Emirhan","Ahmet","Mehmet","Efe","Osman"];
        return view('pages.anasayfa',$data /* ["ad"=>"Emirhan"] */)/* ->with($data) */;
    }
    public function user($uye){
        return $uye;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RequestForm extends Controller
{
    public function index($id)
    {
        /* $users=DB::table("users")->find($id); */
        $users= User::find($id);
        echo $users->getPost;
    }
    public function form()
    {
        return view("pages.form");
    }
    public function post(RegisterRequest $request)
    {
        /*  $request->validate([
            'password' => "required |min:3|confirmed",
            'email' => "required|email|max:3"
        ]);
        print_r("Emailiniz: " .$request->post("email") ."<br> Şifreniz: ".$request->post("password")); */

        // Other Using

        /* $validationRules=[
            'password' => "required |min:3|confirmed",
            'email' => "required|email|max:3"
        ];
        $rules= Validator::make($request->all(),$validationRules,["confirmed"=>" :attribute tekrarı aynı olması gerekiyor."],["password"=>"Şifre"]);
        if ($rules->fails()) {
            return redirect()->back()->withErrors($rules)->withInput();
        }
        return "ok"; */


        print_r($request->post());
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function data($name){
        return view('home',['name'=>$name]);
    }
    function userdata(){
        $data=['man','hey','guy','lead'];
        return view('/about',['about'=>$data]);
    }
    function postuser(Request $req){
        // $req->validate([
        //     'username'=>'required',
        //     'password'=>'required'
        // ]);
         $data=$req->input();
         $req->session()->put('username',$data['username']);
         return View('buggerOff');
    }
    function logout(){
        if (session()->has('username')) {
            session()->pull('username');
            return redirect('about');
        }
    }
}

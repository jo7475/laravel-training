<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class userdbcontroler extends Controller
{
    //
    function fetch(){
        $data=User::all();
        return view('users',['data'=>$data]);
        //return DB::select('select * from user');
        //return view('users',['users']);
    }
    function fetchapi(){
       $data=Http::get('https://reqres.in/api/users?page=1');
       return View('users',['data'=>$data['data']]);
    }
}

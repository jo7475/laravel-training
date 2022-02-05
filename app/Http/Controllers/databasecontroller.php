<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\city;

class databasecontroller extends Controller
{
    function dataretrive(){
        $data= city::paginate(5);
        return view('list',['city'=>$data]);
    }

}

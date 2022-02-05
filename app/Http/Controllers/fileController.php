<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class fileController extends Controller
{
    function fileupload(Request $req){
        return $req->file('file')->store('docs');
        echo 'file';

    }
    //
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shrinkings;

class shorter extends Controller
{
    //
    function key($id){
         $site = shrinkings::where('key','=', $id)
        ->value('url');
        return view('show',compact('site'));
    }
}

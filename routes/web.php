<?php

use App\shrinkings;


Route::get('/', function () {
    return view('welcome');
});

Route::get('home',function(){
    return view ('index');
});


Route::get('short',function(){
    return view('short'); 
});

Route::get('check',function(){
    return view('check'); 
});


//using controller
Route::get('/{key}','shorter@key');

/*Route::get('/{key}', function ($key) {
    
#sql method    $site = DB::table('shrinkings')->where('key',$key)->value('url');
 Model method   $site = shrinkings::where('key','=', $key)
        ->value('url');
    return view('show',compact('site'));
});*/
<?php

Route::get("notify/sms",function (){
    echo "<br> sms from notify";
});
//"middleware"=>"my1",
Route::group(["namespace"=>"Anisa\Notification\Http\Controllers"],function (){

    Route::get("/aa","FirstController@get")->middleware("my1:bb");



});


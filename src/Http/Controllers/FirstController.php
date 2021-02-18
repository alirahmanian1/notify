<?php


namespace Anisa\Notification\Http\Controllers;



use Anisa\Notification\Models\Payamak;
use Illuminate\Http\Request;

class FirstController extends BaseController
{
    public function get(Request $request)
    {
//        var_dump($request);
//        echo "get get get";

//        $age=20;
//        echo config("notify.api");

//        return view("notification.home",compact("age"));

        return Payamak::all();

    }
}

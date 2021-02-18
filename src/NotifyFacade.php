<?php


namespace Anisa\Notification;


use Illuminate\Support\Facades\Facade;

class NotifyFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return "one";
    }

    public static function smsTypes()
    {
        return ["login","register","salam"];
    }
}

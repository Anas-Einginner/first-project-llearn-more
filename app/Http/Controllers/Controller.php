<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    function home()
    {
        echo '<h1> hier Home </h1>';
    }
    function about()
    {
        echo '<h1> hier about </h1>';
    }
    function contact()
    {
        echo '<h1> hier contact </h1>';
    }
    function msg()
    {
        return view('SiteOne.msg');
    }
}

<?php

namespace App\Http\Controllers;

use App\Example;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;

class PagesController extends Controller
{
    public function home()
    {
        return Request::input('name');
//        return View::make('welcome');
//        ddd(resolve('App\Example'),resolve('App\Example'));
    }
}

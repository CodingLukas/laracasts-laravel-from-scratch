<?php

namespace App;

class ExampleFacade extends \Illuminate\Support\Facades\Facade
{

    protected static function getFacadeAccessor()
    {
        return Example::class;
    }
}

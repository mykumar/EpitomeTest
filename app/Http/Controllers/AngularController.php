<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Log;
use App\Models\Beta;
use App\Models\Testjson;

class AngularController extends BaseController
{
    
    public function testAngular()
    {
        Log::info("we are in the AngularController::testAngular");
        return view('angular');
    }

    public function testAngularUi()
    {
        Log::info("we are in the AngularController::testAngularUi");
        return view('angularuiselect');
    }

    public function welcome()
    {
        Log::info("we are in the AngularController::welcome");
        return view('welcome');
    }

    public function testAngularGrid()
    {
        Log::info("we are in the AngularController::testAngularGrid");
        return view('angularuigrid');
    }

    public function getTestJson()
    {
        Log::info("we are in the AngularController::testAngularGrid");

        return response()->json(Testjson::getData());
    }
}


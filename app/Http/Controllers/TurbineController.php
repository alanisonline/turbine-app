<?php

namespace App\Http\Controllers;

use App\Models\Turbine;

class TurbineController extends Controller
{
    public function getReport()
    {
        $turbine = new Turbine();
        return $turbine->getReport();
    }
}

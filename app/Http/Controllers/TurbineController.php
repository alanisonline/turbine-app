<?php

namespace App\Http\Controllers;

use App\Models\Turbine;

class TurbineController extends Controller
{
    /**
     * @return string
     */
    public function report()
    {
        $turbine = new Turbine();
        return $turbine->report();
    }
}

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
        return (new Turbine())->report();
    }
}

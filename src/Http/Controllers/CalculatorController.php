<?php

namespace Zainburfat\Calc\Http\Controllers;

use App\Http\Controllers\Controller;
use Zainburfat\Calc\Models\Calculator;

class CalculatorController extends Controller
{
    public function index()
    {
        $calculations = Calculator::all();

        return view('calc::index', compact('calculations'));

    }
}

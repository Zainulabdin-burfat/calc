<?php

namespace Zainburfat\Calc\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Zainburfat\Calc\Models\Calculator;

class CalcController extends Controller
{
    public function index()
    {
        $calculations = Calculator::all();

        return view('calc::index', compact('calculations'));

    }
}

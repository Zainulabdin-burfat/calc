<?php

namespace Zainburfat\Calc\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Zainburfat\Calc\Models\Calculator;

class LangController extends Controller
{
    public function index(Request $request)
    {
        if (! in_array($request->locale, ['en', 'de'])) {
            abort(400);
        }

        App::setLocale($request->locale);

        return true;
    }
}

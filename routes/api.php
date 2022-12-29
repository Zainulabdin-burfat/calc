<?php

use Illuminate\Support\Facades\Route;
use Zainburfat\Calc\Http\Controllers\Api\LangController;
use Zainburfat\Calc\Http\Controllers\CalculatorController;


Route::get('/calculations', [CalculatorController::class,'index']);
Route::get('/lang', [LangController::class,'index']);
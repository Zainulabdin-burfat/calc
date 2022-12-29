<?php

namespace Zainburfat\Calc\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Calculator extends Authenticatable
{
    protected $table = 'calculator';

    protected $fillable = [
        'result',
        'action'
    ];
}

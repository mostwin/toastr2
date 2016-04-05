<?php
/**
 * Created by PhpStorm.
 * User: ylj
 * Date: 2016/4/2
 * Time: 14:19
 */

namespace Mostwin\Toastr\Facades;

use Illuminate\Support\Facades\Facade;

class Toastr extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'toastr';
    }
}
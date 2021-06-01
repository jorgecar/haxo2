<?php

namespace Jorgecar\Haxo2;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jorgecar\Haxo2\Haxo2
 */
class Haxo2Facade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'haxo2';
    }
}

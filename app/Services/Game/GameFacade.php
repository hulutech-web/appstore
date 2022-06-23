<?php

namespace App\Services\Game;

use Illuminate\Support\Facades\Facade;

class GameFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'GameService';
    }
}

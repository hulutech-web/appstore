<?php

namespace App\Services\Game;
use Illuminate\Support\Facades\Http;

class GameService
{
    public function sync($data)
    {
        $url = 'https://apps.bytesfield.com/customer/api/app/package?package_name='.$data;
        $response = Http::get($url);
        return $response;
    }
}

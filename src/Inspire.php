<?php

namespace Sensy\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire
{
    public function justDoIt()
    {
        try
        {

            $response = Http::get('https://inspiration.goprogram.ai/');
            return $response['quote'] . ' - ' . $response['author'];
        }
        catch (\Exception $e)
        {
            return "Got an error:" . $e->getMessage();
        }
    }
}

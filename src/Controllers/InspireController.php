<?php

namespace Sensy\Inspire\Controllers;

use Sensy\Inspire\Inspire;

class InspireController
{
    public function __invoke(Inspire $inspire)
    {
        $quote = $inspire->justDoIt();
        return view('inspire::index', compact('quote'));
    }
}

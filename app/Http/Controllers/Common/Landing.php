<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Landing extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
<<<<<<< HEAD
        //
    }
}
=======
        return view('pages.home');
    }
}
>>>>>>> cee51691f87983de8083ec0d618b1e94208cda22

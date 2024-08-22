<?php

namespace App\Http\Controllers;

use App\Models\Txtwelcome;
use App\Models\Portfolio;
use Illuminate\Http\Request;


use Illuminate\Routing\Controller as BaseController;


class AvoHomeController extends BaseController

{

    public function homepage()
    {
        return View('welcome')
        ->with('Portfolios', Portfolio::all())
        ->with('txtwelcomes', Txtwelcome::all());
   
    }


}



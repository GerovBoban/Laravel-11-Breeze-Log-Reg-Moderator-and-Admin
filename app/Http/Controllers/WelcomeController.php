<?php

namespace App\Http\Controllers;

// use App\Models\Welcome;
use App\Models\Portfolio;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;


class WelcomeController extends Controller
{
    public function Portfolio() {
        $Portfolios = Portfolio::all();
        return view('welcome', ['Portfolios' => $Portfolios]);
     }

}



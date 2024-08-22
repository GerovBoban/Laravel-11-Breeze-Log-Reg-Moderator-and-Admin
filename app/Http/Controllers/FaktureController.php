<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class FaktureController extends Controller
{
    public function Fakture() {
        $portfolios = Portfolio::all();
        // var_dump($Descriptions); die();
        return view('fakture', ['portfolios' => $portfolios]);
        
    }
}

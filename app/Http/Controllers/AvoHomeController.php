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
        // $directory = 'http://dekorativnialati.rs/public_html/Laravel_001/';
        // Ovo ispod je zbog ONLINE. Ovde radi ali tamo nece, pa trazim resenje
        // $images = \File::allFiles(public_path('image'));
        // dd($directory);
        return View('welcome')
        ->with('Portfolios', Portfolio::all())
        ->with('txtwelcomes', Txtwelcome::all());
         // Ovo ispod je zbog ONLINE. Ovde radi ali tamo nece, pa trazim resenje
        // ->with(array('images'=>$images));
    
    }
}



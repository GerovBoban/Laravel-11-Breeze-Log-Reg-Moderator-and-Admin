<?php

namespace App\Http\Controllers;
use App\Models\Txtwelcome;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function Superadmin() {
        $txtwelcomes = Txtwelcome::query()->orderBy('created_at', 'desc')->get();
        
           return view('superadmin',  ['txtwelcomes' => $txtwelcomes]);
                  
    }
}

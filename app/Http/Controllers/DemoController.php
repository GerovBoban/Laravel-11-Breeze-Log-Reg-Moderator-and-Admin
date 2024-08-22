<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Txtwelcome;
// use Storage;
use File;
use Illuminate\Support\Str;

class DemoController extends Controller
{


     /**
     * Display a listing - INDEX - of the resource.  * Svi tekstovi na INDEX
    */
    // Public Function index ()
    public function copyImage(Request $request)
    
    {
        $txtwelcomes = Txtwelcome::query()->orderBy('created_at', 'desc')->get();
     
    
        if (auth()->user()->id !== 1) 
        {
            abort(403);
        }
    
        if ($request->key) 
        {
                     
          
            $key=$request->key;  
            $slice = Str::of($key)->afterLast('/');
            File::copy(public_path('image/'.$slice), public_path('policeman/Slika_Gerov_Boban.jpg'));

          
            /**
            * Write code on Construct
             *    
            * @return \Illuminate\Http\Response
             */

             return view('superadmin', ['txtwelcomes' => $txtwelcomes]);
        }
        else 
        {
            return view('chng_adm_img', ['txtwelcomes' => $txtwelcomes]);
     
        }
    }

}
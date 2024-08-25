<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Txtwelcome;

class ChangeimgController extends Controller
{

     /**
     * Display a listing - INDEX - of the resource.  * Svi tekstovi na INDEX
    */
    Public Function index () {
  
    $txtwelcomes = Txtwelcome::query()->orderBy('created_at', 'desc')->get();
 
        if (auth()->user()->id !== 1) {
        abort(403);
        }

        return view('changeimg.index', ['txtwelcomes' => $txtwelcomes]);

    }
    
    /**
     * Show the form for creating a new resource. * Forma - kreiranje novih poruka
     */
    public function create()
    {
        $txtwelcomes = Txtwelcome::all();
   
        if (auth()->user()->id !== 1) {
        abort(403);
       
        }
        return view('changeimg.create');
    }
    
    /**
     * Store a newly created resource in storage. * Poruma se snima
     */
    public function store(Request $request)
    {
            if (auth()->user()->id !== 1) {
            abort(403);
          
              }

        $txtwelcome = $request->validate([
            // 'img_name' => ['required', 'string'],
            'img_lnk' => 'nullable|image|mimes:jpeg,jpg,png,gif',
            // 'image' => 'required|mimes:doc,docx,pdf,txt,json,xls|max:2048',
            // 'txt_1' => ['required', 'string'],
            // 'txt_2' => ['required', 'string'],
            // 'txt_3' => ['required', 'string'],
            ]);

        $txtwelcome['user_id'] = $request->user()->id;
      
        $filename ='';
     
        if ($request-> hasFile('img_lnk')) {

            $filename = $request->getSchemeAndHttpHost() . '/image/' . time() . '.' . $request->img_lnk->extension();
            $request->img_lnk->move(public_path() . '/image/', $filename);
            
        }
        
        $blanco = ' ';
        $txtwelcome = Txtwelcome::create([
            'img_lnk' => $filename,
            // 'img_name' => $request->img_name,
            // 'txt_1' => $request->txt_1,
            // 'txt_2' => $request->txt_2,
            // 'txt_3' => $request->txt_3,
       
            'img_name' => $blanco,
            'txt_1' => $blanco,
            'txt_2' => $blanco,
            'txt_3' => $blanco,
        ]);
      
        // return to_route('changeimg.index')->with('status', 'File Has been uploaded successfully in Laravel');
        
        return to_route('superadmin')->with('status', 'File Has been uploaded successfully in Laravel');

    }


  /**
     * Display the specified resource - OVO NEĆU NI DA KORISTIM - Ne radi!!!!!
     */
    public function show(Txtwelcome $txtwelcome)
    {
    // Ne koristim. Jer se poruke odmah vide na index. 
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Txtwelcome $txtwelcome)
    {
            if (auth()->user()->id !== 1) {
                abort(403);
            }
        return view('changeimg.edit', ['txtwelcome' => $txtwelcome]);
    }

    
    /**
     * Update the specified resource in storage.
     */
   
        public function update(Request $request, $id)
    {
    
        if (auth()->user()->id !== 1) {
            abort(403);
              }

        $txtwelcome = $request->validate([
            'img_name' => ['required', 'string'],
            'txt_1' => ['required', 'string'],
            'txt_2' => ['required', 'string'],
            'txt_3' => ['required', 'string'],
     
        ]);
  
            $txtwelcome = Txtwelcome::find($id);
            $txtwelcome->img_name=$request->img_name;
            $txtwelcome->txt_1=$request->txt_1;
            $txtwelcome->txt_2=$request->txt_2;
            $txtwelcome->txt_3=$request->txt_3;
     
         If ($txtwelcome->update()){
            return to_route('changeimg.index', $txtwelcome)->with('message', 'Message was updated');
        }
        else{
            return " Nije se update-ovalo!";
        }
        }

        
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Txtwelcome $txtwelcome)
    {
        if ($txtwelcome->user_id !== request()->user()->id) {
            abort(403);
        }

        if (auth()->user()->id !== 1) {
            abort(403);
              }

        $txtwelcome->delete();

        return to_route('changeimg.index')->with('message', 'Note was deleted');
    }

}

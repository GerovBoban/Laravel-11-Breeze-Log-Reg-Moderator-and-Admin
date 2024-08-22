<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{

     /**
     * Display a listing - INDEX - of the resource.
     */
    Public Function index () 
    {
       $portfolios = Portfolio::query()->orderBy('created_at', 'desc')->get();
   
        if (auth()->user()->id !== 1) {
        abort(403);
      
        }

        return view('portfolio.index', ['portfolios' => $portfolios]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $portfolios = Portfolio::all();
    
        if (auth()->user()->id !== 1) {
        abort(403);
       
    
        }
        return view('portfolio.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if (auth()->user()->id !== 1) {
            abort(403);
       
            }
        $portfolio = $request->validate([
            'language_1' => ['required', 'string'],
            'description_1' => ['required', 'string'],
            'language_2' => ['required', 'string'],
            'description_2' => ['required', 'string'],
            'language_3' => ['required', 'string'],
            'description_3' => ['required', 'string'],
        ]);
           
        $portfolio['user_id'] = $request->user()->id;
    
        $portfolio = Portfolio::create([
            'language_1' => $request->language_1,
            'description_1' => $request->description_1,
            'language_2' => $request->language_2,
            'description_2' => $request->description_2,
            'language_3' => $request->language_3,
            'description_3' => $request->description_3,
        ]);
             
        return to_route('portfolio.index', $portfolio )->with('message', 'Messages was create');
    }

    /**
     * Display the specified resource - OVO NEĆU NI DA KORISTIM - Ne radi!!!!!
     */
    public function show(Portfolio $portfolio)
    {
    // Ne koristim. Jer se poruke odmah vide na index - pa ako reba - menjam je. 
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
       
        if (auth()->user()->id !== 1) {
                abort(403);
        }
        return view('portfolio.edit', ['portfolio' => $portfolio]);
    }

    
    /**
     * Update the specified resource in storage.
     */
          public function update(Request $request, $id)
    {
    
        if (auth()->user()->id !== 1) {
            abort(403);
        }
             
        $portfolio = $request->validate([
            'Yes_No' => ['required', 'string'],
            'language_1' => ['required', 'string'],
            'description_1' => ['required', 'string'],
            'language_2' => ['required', 'string'],
            'description_2' => ['required', 'string'],
            'language_3' => ['required', 'string'],
            'description_3' => ['required', 'string']
        ]);
        
            $portfolio = Portfolio::find($id);
       
           $portfolio->Yes_No=$request->Yes_No;
           $portfolio->language_1=$request->language_1;
           $portfolio->description_1=$request->description_1;
           $portfolio->language_2=$request->language_2;
           $portfolio->description_2=$request->description_2;
           $portfolio->language_3=$request->language_3;
           $portfolio->description_3=$request->description_3;

           
         If ($portfolio->update()){
            return to_route('portfolio.index', $portfolio)->with('message', 'Message was updated');
        }
        else{
            return " Nije se update-ovalo!";
        }
    }

        
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->user_id !== request()->user()->id) {
            abort(403);
        }

        if (auth()->user()->id !== 1) {
            abort(403);
              }

        $portfolio->delete();

        return to_route('portfolio.index')->with('message', 'Note was deleted');
    }

}

<?php

namespace App\Http\Controllers;

use App\Proposition;
use Illuminate\Http\Request;

class PropositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
     return view('agences.create');



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        //

        $Proposition=DB::table('Propositions');

                      $Proposition->insert([

                        'Proposition_commune' =>$request->input('Proposition_commune') ,
                        'Proposition_wilaya' =>$request->input('Proposition_wilaya') ,
                        

                      ]);

                    return redirect('/agences');


        
         
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proposition  $proposition
     * @return \Illuminate\Http\Response
     */
    public function show(Proposition $proposition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proposition  $proposition
     * @return \Illuminate\Http\Response
     */
    public function edit(Proposition $proposition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proposition  $proposition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proposition $proposition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proposition  $proposition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proposition $proposition)
    {
        //
    }

  
}

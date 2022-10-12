<?php

namespace App\Http\Controllers;
use App\Models\Rubrica;
use Illuminate\Http\Request;
use App\Http\Requests\CreateRubricasProfileRequest;
use App\Http\Requests\UpdateRubricasProfileRequest;
class RubricasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Rubrica $rubricas)
    {  
        return view('rubrica.index')->with('rubricas', $rubricas->all());
    }

     /**
     * Show the form for creating the specified resource.
     * 
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        return view('rubrica.create');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $rubrica
     * @return \Illuminate\Http\Response
     */

    public function edit(Rubrica $rubrica)
    {
      return view('rubrica.create')->with('rubrica', $rubrica);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(CreateRubricasProfileRequest $request, Rubrica $rubrica)
    {   
        $rubrica->create([
            'name'=>$request->input('name'),
            'surname'=>$request->input('surname'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
        ]);

        //flesh success if success 

             return redirect(route('rubrica.index'))->with('success','Profilo creato correttamente');
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */

    public function update(UpdateRubricasProfileRequest $request, Rubrica $rubrica) 
    {   
        $rubrica->update([
            'name'=>$request->input('name'),
            'surname'=>$request->input('surname'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
        ]);

             return redirect(route('rubrica.index'))->with('success','Profilo Modificato correttamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   mixed $rubrica
     * @return \Illuminate\Http\Response
     */

    public function destroy(Rubrica $rubrica)
    {
        $rubrica->delete();
        return redirect(route('rubrica.index'))->with('success','Profilo eliminato correttamente');
    }
}
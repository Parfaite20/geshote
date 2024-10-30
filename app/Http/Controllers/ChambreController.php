<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chambre;

class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cham = Chambre::all(); 
        return view("ensembles1.index", compact("cham"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ensembles1.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cham = new Chambre;
        $cham->nbrpiece=$request->nbrpiece;
        $cham->etatcham=$request->etatcham;
        $cham->telcham=$request->telcham;

        $cham->save();
        return redirect()->route('ensembles1.create')
        ->with('success', 'Ajout réussi !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Chambre::findOrFail($id);
        return view('ensembles1.edit',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = Chambre::find($id);
        $id->nbrpiece=$request->nbrpiece;
        $id->etatcham=$request->etatcham;
        $id->telcham=$request->telcham;

        $id->save();
        return redirect()->route('ensembles1.index')
               ->with('success', 'Mise à jour réussie !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Chambre::findOrFail($id);
        $id->delete();

        return redirect()->route('ensembles1.index')
               ->with('success', 'Suppession réussie !');
    }
}

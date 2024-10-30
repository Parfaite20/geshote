<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facture;
use App\Models\Reservation;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fac = Facture::all(); 
        return view("ensembles4.index", compact("fac"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $re = Reservation::all();
        return view('ensembles4.create', compact('re'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = new facture;
        $id->reservations_id=$request->reservations_id;
        $id->montant=$request->montant;

        $id->save();
        return redirect()->route('ensembles4.create')
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
        $id = Facture::findOrFail($id);
        $re = Reservation::all();
        return view('ensembles4.edit',compact('id','re'));
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
        $id = Facture::find($id);
        $id->reservations_id=$request->reservations_id;
        $id->montant=$request->montant;

        $id->save();
        return redirect()->route('ensembles4.index')
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
        $id = Facture::findOrFail($id);
        $id->delete();

        return redirect()->route('ensembles4.index')
               ->with('success', 'Suppession réussie !');
    }
}

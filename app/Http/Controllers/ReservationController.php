<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chambre;
use App\Models\Client;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $re = Reservation::all(); 
        return view("ensembles3.index", compact("re"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cham = Chambre::all();
        $cli = Client::all();
        return view('ensembles3.create', compact('cham', 'cli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = new Reservation;
        $id->dateE=$request->dateE;
        $id->dateS=$request->dateS;
        $id->clients_id=$request->clients_id; 
        $id->chambres_id=$request->chambres_id;

        $id->save();
        return redirect()->route('ensembles3.create')
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
        $id = Reservation::findOrFail($id);
        $cham = Chambre::all();
        $cli = Client::all();
        return view('ensembles3.edit',compact('id','cham','cli'));
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
        $id = Reservation::find($id);
        $id->dateE=$request->dateE;
        $id->dateS=$request->dateS;
        $id->clients_id=$request->clients_id;
        $id->chambres_id=$request->chambres_id;

        $id->save();
        return redirect()->route('ensembles3.index')
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
        $id = Reservation::findOrFail($id);
        $id->delete();

        return redirect()->route('ensembles3.index')
               ->with('success', 'Suppession réussie !');
    }
}

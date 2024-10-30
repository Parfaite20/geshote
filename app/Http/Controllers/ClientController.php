<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Client::orderBy("nom", "asc"); 
        return view("ensembles2.index", compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ensembles2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom"=>"required",
            "email"=>"required|email|unique:clients",
            "tel1"=>"required",          
        ]);
        Client::create($request->all());
        
        return redirect()->route('ensembles2.create')
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
        $id = Client::findOrFail($id);
        return view('ensembles2.edit',compact('id'));
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
        $id = Client::find($id);
        $id->nom=$request->nom;
        $id->email=$request->email;
        $id->adresse=$request->adresse;
        $id->tel1=$request->tel1;
        $id->tel2=$request->tel2;

        $id->save();
        return redirect()->route('ensembles2.index')
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
        $id = Client::findOrFail($id);
        $id->delete();

        return redirect()->route('ensembles2.index')
               ->with('success', 'Suppession réussie !');
    }
}

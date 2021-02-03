<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function create(){
       return view('create');
    }
    public function store(Request $request){
        $store = new Pokemon();
        $store->nom = $request->nom;
        $store->type = $request->type;
        $store->lvl = $request->lvl;
        $store->save();
        return redirect()->back();
    }
}

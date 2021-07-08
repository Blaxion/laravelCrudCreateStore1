<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index(){
        $pokemons=Pokemon::all();
        return view('pokedex',compact('pokemons'));
    }
    public function create(){
        return view('pages.createpokemon');
    }
    public function store(Request $request){
            $store = new Pokemon;
            $store->name = $request->name;
            $store->type = $request->type;
            $store->lvl = $request->lvl;
            $store->save();
            return redirect('/');
    }
    
}
@extends('layout.index')
@section('body')
    <div class="container w-25 mt-5">
        <form action="/postpokemon" method="POST">
            @csrf
            <div class="mb-3">
                <label for="pokemonname" class="form-label">Name</label>
                <input type="text" name='name' class="form-control" id="pokemonname" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="pokemontype" class="form-label">Type</label>
                <input type="text" name='type' class="form-control" id="pokemontype">
            </div>
            <div class="mb-3">
                <label for="pokemonlvl" class="form-label">Lvl</label>
                <input type="number" name='lvl' class="form-control" id="pokemonlvl">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

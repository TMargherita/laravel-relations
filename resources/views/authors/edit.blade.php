@extends('layouts.main')

@section('page-title')
Modifica i dati dell'autore
@endsection

@section('page-content')
<div class="container ">   
    <h1>Modifica l'autore</h1>
    <form action="{{route('authors.update', $author->id)}}" method="POST">
        @csrf
        @method("PUT")

        <div class="form-group ">
            <label for="name">Nome</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Modifica il nome" value="{{old("name")}}">

            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
             @enderror
        </div>

        <div class="form-group">
            <label for="lastname">Cognome</label>
            <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" placeholder="Modifica il cognome" value="{{old("lastname")}}">

        @error('lastname')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="form-group">
            <label for="date_of_birth">Data di nascita</label>
            <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" id="date_of_birth" name="date_of_birth" placeholder="Modifica la data di nascita" value="{{old("date_of_birth")}}">

         @error('date_of_birth')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
    <a href="{{route("authors.index")}}" class="btn btn-primary">Home</a>
</div>
@endsection
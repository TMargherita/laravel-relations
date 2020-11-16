@extends('layouts.main')

@section('page-title')
Un nuovo autore
@endsection

@section('page-content')
<div class="container ">   
    <h1>Crea un autore</h1>

    <form action="{{route('authors.store')}}" method="POST">
    @csrf
    @method("POST")

        <div class="form-group ">
            <label for="name">Nome</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Inserisci il nome" value="{{old("name")}}">

            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
             @enderror
        </div>
    
        <div class="form-group">
            <label for="lastname">Cognome</label>
            <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" placeholder="Inserisci il cognome" value="{{old("lastname")}}">

        @error('lastname')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="form-group">
            <label for="date_of_birth">Data di nascita</label>
            <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" id="date_of_birth" name="date_of_birth" placeholder="Inserisci la data di nascita" value="{{old("date_of_birth")}}">

         @error('date_of_birth')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection

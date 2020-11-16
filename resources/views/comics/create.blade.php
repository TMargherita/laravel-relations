@extends('layouts.main')

@section('page-title')
    Nuovo Fumetto
@endsection

@section('page-content')
<div class="container justify-content-center">    
    <h1>Inserisci un nuovo Fumetto</h1>
    
    <form action="{{route("comics.store")}}" method="POST">
        @csrf
        @method("POST")
        
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Metti qui il titolo" value="{{old("title")}}">

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="original_title">Titolo Originale</label>
            <input type="text" class="form-control @error('original_title') is-invalid @enderror" id="original_title" name="original_title" placeholder="Qui metti il titolo originale" value="{{old("original_title")}}">

            @error('original_title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="number">Numero Fumetto</label>
            <input type="number" class="form-control @error('number') is-invalid @enderror" id="number" name="number" placeholder="Inserisci ora il numero del fumetto" value="{{old("number")}}">

            @error('number')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="n_pages">Numero di Pagine</label>
            <input type="number" class="form-control @error('n_pages') is-invalid @enderror" id="n_pages" name="n_pages" placeholder="Inserisci il numero delle pagine" value="{{old("n_pages")}}">

            @error('n_pages')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="edition">Edizione</label>
            <input type="text" class="form-control @error('edition') is-invalid @enderror" id="edition" name="edition" placeholder="Edizione" value="{{old("edition")}}">

            @error('edition')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="reading">Verso di lettura</label>

            <select class="form-control @error('reading') is-invalid @enderror" id="reading" name="reading">
                <option value="ltr" selected>Da Sinistra a Destra</option>
                <option value="rtl">Da Destra a Sinistra</option>
            </select>

            @error('reading')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Inserisci il prezzo del nuovo fumetto" value="{{old("price")}}">

            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="color">A colori</label>
            <input type="checkbox" name="color" id="color" value="1">
        </div>

        <div class="form-group">
            <label for="release">Anno</label>

            <select class="form-control @error('release') is-invalid @enderror" id="release" name="release">

                @for ($i = date("Y"); $i >= 1920; $i--)                    
                    <option value="{{$i}}">{{$i}}</option>
                @endfor

            </select>

            @error('release')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="cover">Immagine Copertina</label>
            <input type="text" class="form-control @error('cover') is-invalid @enderror" id="cover" name="cover" placeholder="Inserisci l'url dell'immagine di copertina" value="{{old("cover")}}">

            @error('cover')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="author_id">Autore</label>

            <select class="form-control @error('author_id') is-invalid @enderror" id="author_id" name="author_id">

                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }} {{ $author->lastname }}</option>
                @endforeach

            </select>

            @error('author_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <h3>Generi</h3>

            <ul>
            @foreach ($genres as $genre)
                <li>
                    <label for="genre-{{$genre->id}}"> {{ $genre->name }}</label>
                    <input type="hidden" name="genre" value="0">
                    <input type="checkbox" name="genres[]" id="genre-{{$genre->id}}" value="{{$genre->id}}">
                </li>
            @endforeach
            </ul>
            @error('genres')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Inserisci</button>
    </form>
</div>
@endsection
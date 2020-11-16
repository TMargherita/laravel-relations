@extends('layouts.main')

@section('page-title')
Gli Autori
@endsection

@section('page-content')

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Cognome</th>
        <th scope="col">Data</th>
        <th scope="col">Nazionalità</th>
        <th scope="col">Fumetti</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($authors as $author)
        <tr>
            <th scope="row">1</th>
            <td>{{$author->id}}</td>
            <td>{{$author->name}}</td>
            <td>{{$author->lastname}}</td>
            <td>{{$author->date_of_birth}}</td>
            <td>{{$author->info->nationality}}</td>
            <td>
                <ul>
                    @if (count($author->comics) > 0)
                        @foreach ($author->comics as $comic)
                            <li>{{$comic->title}}</li>
                        @endforeach
                    @else
                        <li style="color: blue">Non ha scritto nessun fumetto</li>
                    @endif
                </ul>
            </td>
            <td><a href="{{route("authors.edit", $author->id)}}" class="btn btn-primary">Modifica l'Autore</a></td>
            <td><a href="{{route("authors.create")}}" class="btn btn-primary">Aggiungi un Autore</a></td>
            <td>
                <form action="{{route('authors.destroy', $author->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger" type="submit">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                        </svg>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
@endsection
@extends('layouts.main')

@section('page-title')
Fumetti
@endsection

@section('page-content')


<div class="d-flex justify-content-center"><h1>I fumetti</h1></div>
    <div class="container d-flex justify-content-center">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-sm-4">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="{{$comic->cover}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">
                                @if ($comic->author)                       
                                    <h6>Autore: {{ $comic->author->name }} {{ $comic->author->lastname }}</h6>    
                                @endif
                            </h5>
                            <a href="{{route("comics.show", $comic->id)}}" class="btn btn-primary">Scopri di più</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
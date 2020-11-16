@extends('layouts.main')

@section('page-title')
Il Fumetto
@endsection

@section('page-content')

    <div class="d-flex justify-content-center"><h4>Scheda del Fumetto</h4></div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$comic->cover}}" alt="Card image cap">
                    <div class="card-body">
                        <ul>
                            <li>{{$comic->title}}</li>
                            <li>{{$comic->original_title}}</li>
                            <li>{{$comic->author_id}}</li>
                            <li>{{$comic->number}}</li>
                            <li>{{$comic->n_pages}}</li>
                            <li>{{$comic->edition}}</li>
                            <li>{{$comic->reading}}</li>
                            <li>{{$comic->price}}</li>
                            <li>{{$comic->color}}</li>
                            <li>{{$comic->release}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div>   
                    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">Modifica il fumetto</a>
                </div>
                <div>   
                    <a href="{{route('comics.create')}}" class="btn btn-primary">Inserisci un nuovo fumetto</a>
                </div>
                <div>
                    <a href="{{route('comics.index')}}" class="btn btn-primary">Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
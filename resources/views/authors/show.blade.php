@extends('layouts.main')

@section('page-title')
L'Autore
@endsection

@section('page-content')
    <div class="d-flex justify-content-center"><h4>Scheda dell'Autore</h4></div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$author->cover}}" alt="Card image cap">
                    <div class="card-body">
                        <ul>
                            <li>{{$author->name}}</li>
                            <li>{{$author->lastname}}</li>
                            <li>{{$author->date_of_birth}}</li>
                            <li>{{$author->info->nationality}}</li>
                            <li>
                                @if (count($author->comics) > 0)
                                    @foreach ($author->comics as $comic)
                                        <li>{{$comic->title}}</li>
                                    @endforeach
                                @else
                                    <li style="color: blue">Non ha scritto nessun fumetto</li>
                                @endif
                            </li>
                            <li>
                                @if (($author->info->bio) > 0)
                                        {{$author->info->bio}}  
                                 @else
                                <li style="color: red">Biografia non presente</li>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="container">
            <div class="row justify-content-md-center">
                <div> 
                    <a href="{{route('authors.create')}}" class="btn btn-primary">Inserisci un nuovo Autore</a>
                </div>
                <div>   
                    <a href="{{route('authors.edit', $author->id)}}" class="btn btn-primary">Modifica questo Autore</a>
                </div>
                <div>
                    <a href="{{route('authors.index')}}" class="btn btn-primary">Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
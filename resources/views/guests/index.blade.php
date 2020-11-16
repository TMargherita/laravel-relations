@extends('layouts.main')

@section('page-title')
Home
@endsection

@section('page-content')
<section class="center-main">
    <div class="tag-comic">
        <div class="current">
            <h2 class="tag-text">Current Series</h2>     
        </div>
        <div class="locandina">
            <div class="thumb">
                <div class="thumb-content">
                    <div class="content-type">Graphic Novel</div>  
                    <img src="{{asset('img/novel.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <section class="main-comic">
        <div class="container d-flex flex-wrap justify-content-center">
            <div class="row align-items-center">
                @foreach ($comics as $comic)
                <div class="col col-lg-2">
                    <div class="card">
                        <img src="{{$comic->cover}}" alt="img-thumbnail" class="img-thumbnail">
                        <h5 class="card-title">
                            @if ($comic->author)                       
                                <h6>Autore: {{ $comic->author->name }} {{ $comic->author->lastname }}</h6>    
                            @endif
                        </h5>
                        <a href="{{route("comics.show", $comic->id)}}" class="btn btn-primary">Scopri di più</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="merchandise"> 
        <div class="container">
            <div class="row align-items-center">
                <div class="col align-self-center">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('img/buy-comics-digital-comics.png')}}" class="merch-icon" alt="">
                        <span class="merch-text">Digital Comics</span>
                    </div>
                </div>
                <div class="col align-self-center">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('img/buy-comics-merchandise.png')}}" class="merch-icon" alt="">
                        <span class="merch-text">Digital Comics</span>
                    </div>
                </div>
                <div class="col align-self-center">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('img/buy-comics-subscriptions.png')}}" class="merch-icon" alt="">
                        <span class="merch-text">Digital Comics</span>
                    </div>
                </div>
                <div class="col align-self-center">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('img/buy-comics-shop-locator.png')}}" class="merch-icon" alt="">
                        <span class="merch-text">Digital Comics</span>
                    </div>
                </div>
                <div class="col align-self-center">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('img/buy-dc-power-visa.svg')}}" class="merch-icon" alt="">
                        <span class="merch-text">Digital Comics</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
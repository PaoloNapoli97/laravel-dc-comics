@extends('layout.main')

@section('page-content')
    <div class="containter">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{$comic->title}}">
                <div class="card-body">
                  <h5 class="card-title">{{$comic->title}}</h5>
                  <p class="card-text">{{$comic->description}}</p>
                  <p class="card-text">{{$comic->price}}</p>
                  <p class="card-text">{{$comic->series}}</p>
                  <p class="card-text">{{$comic->sale_date}}</p>
                  <p class="card-text">{{$comic->type}}</p>
                </div>
              </div>

        </div>
        <a href="{{ route('comics.index',)}} " class="btn btn-secondary">Torna alla Home</a>
    </div>
@endsection

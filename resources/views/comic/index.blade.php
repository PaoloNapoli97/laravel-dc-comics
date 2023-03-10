@extends('layout.main')

@section('page-content')
    <div class="container">
        <h1>Fumetti</h1>
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Copertina</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data di Uscita</th>
                    <th scope="col">Azioni</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td> {{$comic->id}}</td>
                            <td> <img src="{{$comic->thumb}}" alt="" class="w-100"></td>
                            <td> {{$comic->title}}</td>
                            <td> {{$comic->price}} €</td>
                            <td> {{$comic->series}}</td>
                            <td> {{$comic->sale_date}}</td>
                            <td> 
                                <a href="{{ route('comics.show', $comic->id )}}" class="btn btn-primary">Apri</a>
                                <a href="{{ route('comics.edit', $comic->id )}}" class="btn btn-secondary">Modifica</a>
                                <form class="d-inline-block " action="{{ route('comics.destroy', $comic->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Cancella</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              


        </div>
        <a href="{{ route('comics.create',)}} " class="btn btn-secondary">Aggiungi Fumetto</a>
    </div>
@endsection
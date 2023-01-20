@extends('layout.main')

@section('page-content')
    <div class="container">
        <h1>Fumetti</h1>
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data di Uscita</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Azioni</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td> {{$comic->id}}</td>
                            <td> {{$comic->title}}</td>
                            <td> {{$comic->price}} €</td>
                            <td> {{$comic->series}}</td>
                            <td> {{$comic->sale_date}}</td>
                            <td> {{$comic->type}}</td>
                            <td> <a href="{{ route('comics.show', $comic->id )}}" class="btn btn-primary">Apri</a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              


        </div>
        <a href="{{ route('comics.create',)}} " class="btn btn-secondary">Aggiungi Fumetto</a>
    </div>
@endsection
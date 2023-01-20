@extends('layout.main')

@section('page-content')
<div class="container">
        <h3>Aggiungi fumetto</h3>


    <form action="{{ route('comics.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" maxlength="60" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control" id="description" name="description" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" required>
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series" maxlength="50" required>
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Data</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" required>
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control" id="type" name="type" maxlength="20" required>
    </div>

    <button type="submit" class="btn btn-primary">Salva</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</form>
</div>
@endsection
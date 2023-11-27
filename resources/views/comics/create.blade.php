@extends('layouts.main')

@section('content')

<div class="container my-3">


    <h1 id="create-title">Crea un tuo fumetto</h1>

    @if($errors->any())

    <div class="alert alert-warning" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

        </ul>

    </div>

    @endif


    <form action="{{route('comics.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>



        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
          </div>




        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>


        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>



        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>



        <div class="mb-3">
            <label for="sale_date" class="form-label">Data</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
        </div>




        <div class="mb-3">
            <label for="type" class="form-label">Tipo di fumetto</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>


        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-secondary">Annulla</button>
    </form>
</div>

@endsection


@extends('layouts.main')



@section('content')

<h1 class="text-center text-white fw-bold">Crea un tuo comic</h1>

<div class="row">
    <div class="col-8">
        <form action="{{ route('comics.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label text-white">Titolo</label>
                <input type="text" class="form-control" id="title">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label text-white">Immagine</label>
                <input type="text" class="form-control" id="thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label text-white">Prezzo</label>
                <input type="text" class="form-control" id="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label text-white">Serie</label>
                <input type="text" class="form-control" id="series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label text-white">Data</label>
                <input type="text" class="form-control" id="sale_date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label text-white">Tipo</label>
                <input type="text" class="form-control" id="type">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label text-white mb-5">Descrizione</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-5 me-2">Invia</button>
            <button type="reset" class="btn btn-secondary mt-5">Annulla</button>


        </form>
    </div>
</div>


@endsection

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
            <input type="text"
            class="form-control  @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title')}}">
            @error('title')

            <p class="text-danger">{{ $message }}</p>

            @enderror

        </div>



        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description')}}</textarea>
            @error('description')

            <p class="text-danger">{{ $message }}</p>

            @enderror
          </div>




        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb')}}">
            @error('thumb')

            <p class="text-danger">{{ $message }}</p>

            @enderror
        </div>


        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price')}}">
            @error('price')

            <p class="text-danger">{{ $message }}</p>

            @enderror
        </div>



        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series')}}">
            @error('series')

            <p class="text-danger">{{ $message }}</p>

            @enderror
        </div>



        <div class="mb-3">
            <label for="sale_date" class="form-label">Data</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date')}}">
            @error('sale_date')

            <p class="text-danger">{{ $message }}</p>

            @enderror
        </div>




        <div class="mb-3">
            <label for="type" class="form-label">Tipo di fumetto</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type')}}">
            @error('type')

            <p class="text-danger">{{ $message }}</p>

            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-secondary">Annulla</button>
    </form>
</div>

@endsection

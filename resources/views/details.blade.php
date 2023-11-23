@extends('layouts.main')




@section('content')

<h1 class="text-center text-success fw-bold fs-1 mb-5">Comics Details</h1>

<div class="container">

    @foreach ($comics as $comic)

        <div class="card m-3" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <p class="card-title">{{ $comic->description }}</p>
            <p class="card-title">{{ $comic->sale_date }}</p>
            <p class="card-text">{{ $comic->artisti }}</p>
            <p class="card-text">{{ $comic->price }}</p>
            <p class="card-text">{{ $comic->type }}</p>
            <p class="card-text">{{ $comic->type }}</p>

            <a href="#" class="btn btn-primary">Details</a>
            </div>
        </div>



    @endforeach

    <a href="{{ route('home')}}" class="btn btn-danger mt-5">Torna in homepage</a>


</div>



@endsection

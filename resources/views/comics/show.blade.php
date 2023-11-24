@extends('layouts.main')




@section('content')

<h1 class="text-center text-success fw-bold fs-1 mb-5">Comics Details</h1>

<div class="container text-center">

    <div class="card-wraper w-100 d-flex justify-content-center">


        <div class="card m-3 w-50" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-title">{{ $comic->description }}</p>
                <p class="card-title">{{ $comic->sale_date }}</p>
                {{-- @foreach ($comic['artists'] as $artist)
                    <li>{{ $artist }}</li>
                @endforeach --}}

                <p class="card-text">{{ $comic->price }}</p>
                <p class="card-text">{{ $comic->type }}</p>


            </div>
        </div>


    </div>

    <a href="{{ route('comics.index')}}" class="btn btn-danger mt-5">Indietro</a>


</div>



@endsection

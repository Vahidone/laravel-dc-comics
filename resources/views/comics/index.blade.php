@extends('layouts.main')


@section('content')

<h1 class="text-center text-warning fw-bold fs-1 mb-5">Comics List</h1>

        <div class="div d-flex flex-wrap">

            @foreach ($comics as $comic)

                <div class="card m-3" style="width: 18rem;">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                    <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->artisti }}</p>
                    <p class="card-text">{{ $comic->price }}</p>
                    <a href="{{ route('comics.show', $comic->id)}}" class="btn btn-primary">Details</a>
                    </div>
                </div>



            @endforeach


        </div>




@endsection

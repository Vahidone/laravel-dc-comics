@extends('layouts.main')


@section('content')

<h1 class="text-center text-primary fw-bold "></h1>

        <div class="div d-flex flex-wrap">

            @foreach ($comics as $comic)

                <div class="card m-3" style="width: 18rem;">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                    <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->artisti }}</p>
                    <p class="card-text">{{ $comic->price }}</p>
                    <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>



            @endforeach


        </div>




@endsection

@extends('layouts.main')

@section('content')

<div class="container my-3 p-2">
    <div class="row p-2">
        <h1 id="show-title" >
            {{$comic->title}} |
            <div class="actions-box">
                <a href="{{route('comics.edit', $comic)}}" class="btn btn-warning"> <i class="fa-solid fa-pencil"></i> </a>
                @include('partials.deleteComic')
            </div>
        </h1>

    </div>

    <h3 class="mb-4">Serie: <span class="text-danger">{{$comic->series}}</span></h3>

    <div class="row p-2 ">

        <div class="col-6">
            <img class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->title}}">
        </div>

        <div class="col">
            <h4 class="text-primary fs-3 fw-bold">Descrizione:</h4>
            <p class="fs-4">
                {{$comic->description}}
            </p>

            @php
            $time_in_sec = strtotime($comic->sale_date);
            $date_sell_date = getDate($time_in_sec);
            @endphp


            <h4 class="text-primary fs-3 fw-bold">info:</h4>
            <p class="fw-bold fs-4 ">
                prezzo: <span class="text-danger ms-2">{{$comic->price}}</span>, data  {{$date_sell_date['weekday'] . ' ' . $date_sell_date['mday'] . ', ' . $date_sell_date['month'] . ' ' .$date_sell_date['year']}}
            </p>

            <a href="{{route('comics.index')}}" class="btn btn-secondary">Torna</a>
        </div>



</div>
@endsection

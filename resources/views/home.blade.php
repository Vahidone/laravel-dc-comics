@extends('layouts.main')

@section('content')

<div class="container mt-5 text-center">


    <h1 id="home-title">MONDO FUMETTI</h1>

    <p class="text-primary fs-3 ">Attualmente abbiamo <span class="text-danger fs-2 fw-bold">{{$num_products}}</span> fumetti nel nostro negozio online</p>

    <p class="text-success fs-4 fw-bold mt-5">Dai un'occhiata alla lista dei fumetti disponibili :D</p>
</div>

@endsection

@extends('layouts.main')

@section('content')
    <h1>Dettagli fumetto</h1>

    {{-- qui stampo tutti i miei fumetti --}}
    <div class="container my-5">

        <h2>Titolo : {{ $comic->title }}</h2>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <p>Trama : {{ $comic->description }} </p>
        <h4>Prezzo : {{ $comic->price }}</h4>
        <h4>Serie : {{ $comic->series }}</h4>
        <h4>Data di uscita : {{ $comic->sale_date }}</h4>
        <h5>Tipo : {{ $comic->type }}</h5>



    </div>
@endsection

@extends('layouts.main')

@section('content')
    <h1>Creazione albo a fumetti</h1>


    <div class="container my-5">


        <form action="{{ route('comics.store') }}" method="POST">
            {{-- @csrf : elemento da inserire in tutti i form in laravel per controllo di sicurezza --}}
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">TItolo fumetto</label>
                <input type="text" class="form-control" id="title" name="title">

            </div>

            <div class="form-floating my-5">
                <textarea for="description" class="form-control" placeholder="Scrivi la descrizione" id="description" name="description"
                    style="height: 100px"></textarea>

            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine copertina</label>
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
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">

            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo di fumetto</label>
                <input type="text" class="form-control" id="type" name="type">

            </div>

            <button type="submit" class="btn btn-success my-3 ">Invia</button>
            <button type="reset" class="btn btn-danger my-3 ">Cancella tutto</button>


        </form>


    </div>
@endsection

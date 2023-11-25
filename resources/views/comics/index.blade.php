@extends('layouts.main')

@section('content')
    <h1>Tutti i fumetti</h1>

    {{-- qui stampo tutti i miei fumetti --}}
    <div class="container d-flex flex-wrap">

        @foreach ($products as $comic)
            <div class="card m-5 " style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titolo : {{ $comic->title }}</h5>
                    <p class="card-text">Prezzo : {{ $comic->price }}</p>
                    <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Dettagli fumetto</a>
                    <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning my-2 ">Modifica fumetto</a>
                    <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Elimina fumetto</button>
                    </form>
                </div>
            </div>
        @endforeach

        {{ $products->links() }}

    </div>
@endsection

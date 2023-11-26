<form action="{{ route('comics.destroy', $comic) }}" method="POST"
    onsubmit="return confirm('Sei sicuro di voler eliminare {{ $comic->title }}?')">
    {{-- @csrf per il controllo di validità form laravel --}}
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Elimina fumetto</button>
</form>

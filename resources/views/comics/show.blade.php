@extends('layouts.app')

@section('content')
<div class="container my-3">
    
    <h1>Dettagli: {{$comic->title}}</h1>
    <div class="row g-4">
        <div class="col">
            <a  class="btn btn-primary" href="{{ route("comics.edit", $comic) }}">Modifica questo fumetto</a>
            <form action="{{ route('comics.destroy', $comic) }}" method="post">
                @csrf
                @method('DELETE')
                <input id="deleteInput" class="btn btn-danger" type="submit" value="Cancella il fumetto">
            </form>
            <a href="{{ route("comics.index")}}">Torna alla lista dei fumetti</a>
        </div>
    </div>

</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container my-3">
    
    <h1>Dettagli: {{$comic->title}}</h1>
        
    <div class="row g-4">
        <div class="col">
            <a href="{{ route("comics.index") }}">Torna alla lista prodotti</a>
        </div>
    </div>

</div>
@endsection
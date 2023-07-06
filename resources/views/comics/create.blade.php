@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Create comic</h1>
    <div class="row g-4 py-4">
        <div class="col">
            <form action="{{ route('comics.store') }}" method="post" class="needs-validation">
                @csrf
            
                <label for="name">title</label>
                <input class="form-control  @error('title') is-invalid @enderror" type="text" name="title">
                @error("title")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">description</label>
                <input class="form-control @error('description') is-invalid @enderror" type="text" name="description">
                @error("description")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">thumb</label>
                <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb">
                @error("thumb")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
                
                <label for="name">prices</label>
                <input class="form-control @error('prices') is-invalid @enderror" type="text" name="price">
                @error("prices")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror


                <label for="name">series</label>
                <input class="form-control" type="text" name="series">
                @error("prices")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror


                <label for="name">sale date</label>
                <input class="form-control @error('sale_date') is-invalid @enderror" type="date" name="sale_date">
                @error("sale_date")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">type</label>
                <input class="form-control @error('type') is-invalid @enderror" type="text" name="type">
                @error("type")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
             </form>
        </div>
    </div>

</div>
@endsection
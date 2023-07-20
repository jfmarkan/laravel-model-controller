@extends('layouts.app')

@section('title', 'Movies Database')

@section('main-content')
    
    <div class="container">
        
        <h1>
            Movies Result
        </h1>

        <div class="row d-flex justify-content-between">
            @foreach ($movies as $movie)
            <div class="col-3 card p-3 m-2 text-center">
                <img src="..." class="card-img-top" alt="{{$movie->title}}'s Poster image">
                <div class="card-body">
                    <p class="card-text fw-bold">{{ $movie-> title}}</p>
                    <p class="card-text fw-normal">{{ $movie-> original_title}}</p>
                    <p class="card-text fw-light">{{ $movie-> nationality}} - {{ $movie->date }}</p>
                    <p class="card-text">{{ $movie->vote}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
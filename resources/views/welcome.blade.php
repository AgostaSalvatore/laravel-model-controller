@extends('layouts.master')

@section('title', 'Laravel Model controller')

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($movies as $movie)
            <div class="col">
                <div class="card bg-black text-white">
                    <div class="card-body">
                        <h5 class="card-title">Name: {{$movie['original_title']}}</h5>
                        <p class="card-text">Release date: {{$movie['date']}}</p>
                        <p class="card-text">nationality: {{$movie['nationality']}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
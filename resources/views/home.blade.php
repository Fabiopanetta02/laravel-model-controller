@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
<h1>{{ env('APP_NAME') }}</h1>
<section id="movies">
    <div class="d-flex flex-wrap">
        @forelse ($movies as $movie)   
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
                <p class="card-text">{{$movie->nationality}}</p>
                <p class="card-text">{{$movie->date}}</p>
                <p class="card-text">{{$movie->vote}}</p>
                </div>
            </div>
            @empty
            <p> No movie found</p>
        @endforelse
    </div>
</section>

@endsection

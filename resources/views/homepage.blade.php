@extends('layouts.app')

@section('content')
<!-- Main Contents -->
<main class="flex gap-4 overflow-y-scroll w-full">

    <!-- Movie Cards -->
    @foreach($movies as $key => $movie)
        <div class="border py-4 px-3 min-w-[280px] text-sm border-neutral-800">

            <!-- Movie Cover -->
            <div class="flex justify-center mb-4">
                <img src="https://printworks-manchester.com/cinema-poster/images/film-poster-placeholder.png" alt="{{ str_replace(' ', '_', $movie->title) }}_cover" class="w-[250px] h-[285px] object-cover object-center">
            </div>

            <!-- Movie Details -->
            <div class="my-1.5">
                <p><strong>TITLE: </strong><span>{{ $movie->title }}</span></p>
                <p><strong>ORIGINAL TITLE: </strong><span>{{ $movie->original_title }}</span></p>
                <p><strong>NATIONALITY: </strong><span>{{ $movie->nationality }}</span></p>
                <p><strong>DATE: </strong><span>{{ $movie->date }}</span></p>
                <p><strong>VOTE: </strong><span>{{ $movie->vote }}</span></p>
            </div>

        </div>
    @endforeach
</main>
@endsection

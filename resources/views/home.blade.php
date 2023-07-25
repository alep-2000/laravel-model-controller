@extends('layouts.app')

@section('content')
        <h1 class="text-center text-primary my-2">COMICS</h1>
        <div class="container">
            <div class="row">
                @forelse($comics as $comic)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card my-3">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->thumb }}">
                        <div class="card-body mb-5">
                            <h4><span class="fw-bold text-primary">Title:</span> {{ $comic->title }}</h4>
                            <p><span class="fw-bold text-primary">Series:</span> {{ $comic->series }} </p>
                            <p><span class="fw-bold text-primary">Sale-date:</span> {{ $comic->sale_date }}</p>
                            <p><span class="fw-bold text-primary">Price:</span> {{ $comic->price }} </p>
                            <p><span class="fw-bold text-primary">Description:</span> {{ $comic->description }} </p>
                            <p><span class="fw-bold text-primary">Artists:</span> {{ $comic->artists }} </p>
                            <p><span class="fw-bold text-primary">Writers:</span> {{ $comic->writers }} </p>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-12">
                        <p>No comics found!</p>
                    </div>
                @endforelse
            </div>

        </div>
@endsection
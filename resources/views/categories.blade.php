@extends('layouts.main')

@section('jumbotron')

    @foreach ($categories as $categories)
    <article class="mb-5">
        <h2><a href="/categories/{{ $categories->slug }}">{{ $categories->name }}</a></h2>
    </article>
    @endforeach


@endsection
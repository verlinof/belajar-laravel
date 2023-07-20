@extends('layouts.main')

@section('jumbotron')

    @foreach ($post as $post)
    <article class="mb-5">
        <h2><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach


@endsection
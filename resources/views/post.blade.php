@extends('layouts.main')

@section('jumbotron')
    <article>
        <h2>{{ $post->title }}</h2>

        <p>By Verlino raya fajri in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {{-- Kurung kurawal dua di laravel tidak dapat membaca HTML special char --}}
        {{-- {{ $post->body }} --}}
        {{-- sehingga jika ada Tag HTML didalamnya, kita perlu menuliskannya seperti dibawah ini --}}
        {!! $post->body !!}
    </article>
    <a href="/blog">Kembali</a>
@endsection
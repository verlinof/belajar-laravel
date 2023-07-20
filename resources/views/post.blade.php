@extends('layouts.main')

@section('jumbotron')
    <article>
        <h2>{{ $post->title }}</h2>
        {{-- Kurung kurawal dua di laravel tidak dapat membaca HTML special char --}}
        {{-- {{ $post->body }} --}}
        {{-- sehingga jika ada Tag HTML didalamnya, kita perlu menuliskannya seperti dibawah ini --}}
        {!! $post->body !!}
    </article>
    <a href="/blog">Kembali</a>
@endsection
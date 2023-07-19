@extends('layouts.main')

@section('jumbotron')
<h1>Halaman About</h1>
<h3>Hi, {{ $name }}</h3>
<p>Contact me: {{ $email }}</p>
<img src="img/thumbnail.jpg" alt="thumbnail" class="img-thumbnail rounded-circle">
@endsection

@extends('layouts.main')   
@section('konten')

<h1>Halaman About</h1>
<h3>{{ $nama }}</h3> <br>
<p>{{ $email }}</p> <br>
<img src="{{ asset("img/$gambar") }}" alt="{{ $gambar }}" width="300" class="img-thumbnail rounded-circle">

@endsection
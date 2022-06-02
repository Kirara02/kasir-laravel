@extends('layouts.main')
@section('konten')
<h2>{{ $title }}</h2>
<div class="container">
    <div class="row">
        @foreach ($categories as $category)            
        <div class="col-md-4">
            <a href="/posts?category={{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay align-items-center d-flex p-0">
                    <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
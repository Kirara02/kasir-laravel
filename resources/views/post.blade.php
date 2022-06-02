@extends('layouts.main')
@section('konten')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
              <h2 class="mb-3">{{ $post->title }}</h2>
                <p>
                    By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> 
                    in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}"  class="img-fluid">
                <article class="my-2 fs-5">
                    {!! $post->body !!}    
                </article> 
                <a href="/blog" class="d-block text-decoration-none mt-3">Back to Blog</a>
        </div>
    </div>
</div>
<div class="mb-5">
  
</div>
@endsection
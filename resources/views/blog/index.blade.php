@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center bg-primary text-white">
        <div class="container">
            <h1 class="display-4">Welcome to Inspiration Hub</h1>
            <p class="lead">Explore the latest articles and stories</p>
        </div>
    </div>
    <div class="container">
        <h2 class="mb-4">Recent Blog Posts</h2>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                            <a href="{{ route('blog.show', $post->id) }}" class="btn btn-primary mt-auto">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

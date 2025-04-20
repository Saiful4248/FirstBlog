@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    @if($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
    @endif
    <p class="mt-4">{{ $post->content }}</p>
@endsection

<!-- resources/views/profile/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Profile Picture Section -->
            <div class="card mb-4">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('images/default-profile.png') }}" class="rounded-circle" width="150" height="150">
                    </div>
                    <h4>{{ $user->name }}</h4>
                    <p>{{ $user->bio }}</p>
                    <form action="{{ route('profile.update_picture') }}" method="POST" enctype="multipart/form-data" class="d-inline-block">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="profile_picture" class="form-control-file" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                    <form action="{{ route('profile.delete_picture') }}" method="POST" class="d-inline-block ml-3">
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>

            <!-- Profile Statistics Section -->
            <div class="card mb-4">
                <div class="card-body text-center">
                    <h5><strong>Posts:</strong> {{ $posts->count() }}</h5>
                    <h5><strong>Followers:</strong> {{ $user->followers_count }}</h5>
                    <h5><strong>Following:</strong> {{ $user->following_count }}</h5>
                </div>
            </div>

            <!-- Tabs for Posts, About, Favourite, Edit Profile -->
            <div class="card mb-4">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="published-tab" data-toggle="tab" href="#published">Published</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="draft-tab" data-toggle="tab" href="#draft">Draft</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills mb-4">
                        <li class="nav-item">
                            <a class="nav-link active" id="posts-tab" data-toggle="pill" href="#posts-content">Posts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="about-tab" data-toggle="pill" href="#about-content">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="favourite-tab" data-toggle="pill" href="#favourite-content">Favourite</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="edit-profile-tab" data-toggle="pill" href="#edit-profile-content">Edit Profile</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!-- All Posts Section -->
                        <div id="all" class="tab-pane fade show active">
                            <div id="posts-content" class="tab-pane fade show active">
                                @foreach($posts as $post)
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->title }}</h5>
                                            <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                                            <a href="{{ route('blog.show', $post->id) }}" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Published Posts Section -->
                        <div id="published" class="tab-pane fade">
                            @foreach($publishedPosts as $post)
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                                        <a href="{{ route('blog.show', $post->id) }}" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Draft Posts Section -->
                        <div id="draft" class="tab-pane fade">
                            @foreach($draftPosts as $post)
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                                        <a href="{{ route('blog.show', $post->id) }}" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- About Section -->
                        <div id="about-content" class="tab-pane fade">
                            <p>{{ $user->bio }}</p>
                        </div>

                        <!-- Favourite Posts Section -->
                        <div id="favourite-content" class="tab-pane fade">
                            <!-- Favourite posts content -->
                        </div>

                        <!-- Edit Profile Section -->
                        <div id="edit-profile-content" class="tab-pane fade">
                            <form action="{{ route('profile.update') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="bio">Bio</label>
                                    <textarea class="form-control" id="bio" name="bio" rows="3">{{ $user->bio }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

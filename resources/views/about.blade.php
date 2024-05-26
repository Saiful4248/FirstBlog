@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-4 text-center">About Us</h2>
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <img src="https://via.placeholder.com/500x300" alt="About Us" class="img-fluid rounded">
                            </div>
                            <div class="col-md-6">
                                <p class="lead">Welcome to BlogSite! We are dedicated to providing you with the best content on a variety of topics. Our goal is to inform, inspire, and entertain our readers with high-quality blog posts.</p>
                                <p>Our team of writers is passionate about sharing knowledge and insights on topics ranging from technology, lifestyle, health, and more. We believe in the power of words to connect people and create a community of like-minded individuals.</p>
                                <p>If you have any questions or would like to contribute to our blog, feel free to <a href="mailto:info@blogsite.com" class="text-decoration-none">contact us</a>. Thank you for visiting BlogSite!</p>
                                <p>Stay connected with us on social media:</p>
                                <div>
                                    <a href="https://www.facebook.com" target="_blank" class="btn btn-primary btn-sm"><i class="fab fa-facebook-f"></i> Facebook</a>
                                    <a href="https://www.twitter.com" target="_blank" class="btn btn-info btn-sm"><i class="fab fa-twitter"></i> Twitter</a>
                                    <a href="https://www.instagram.com" target="_blank" class="btn btn-danger btn-sm"><i class="fab fa-instagram"></i> Instagram</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

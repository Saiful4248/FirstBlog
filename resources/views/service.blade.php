@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="mb-4 text-center">Our Services</h2>
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <p class="lead text-center mb-4">At BlogSite, we offer a variety of services to help you achieve your goals. Our team is dedicated to providing top-notch services tailored to your needs.</p>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 border-0 shadow-sm text-center">
                                    <div class="card-body">
                                        <i class="fas fa-pencil-alt fa-3x mb-3 text-primary"></i>
                                        <h5 class="card-title">Content Creation</h5>
                                        <p class="card-text">High-quality blog posts, articles, and other content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 border-0 shadow-sm text-center">
                                    <div class="card-body">
                                        <i class="fas fa-chart-line fa-3x mb-3 text-success"></i>
                                        <h5 class="card-title">SEO Optimization</h5>
                                        <p class="card-text">Improve your search engine rankings and increase visibility.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 border-0 shadow-sm text-center">
                                    <div class="card-body">
                                        <i class="fas fa-share-alt fa-3x mb-3 text-info"></i>
                                        <h5 class="card-title">Social Media Management</h5>
                                        <p class="card-text">Enhance your social media presence and engagement.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 border-0 shadow-sm text-center">
                                    <div class="card-body">
                                        <i class="fas fa-handshake fa-3x mb-3 text-warning"></i>
                                        <h5 class="card-title">Consulting</h5>
                                        <p class="card-text">Expert advice and strategies for your online presence.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-center mt-4">Contact us for more information about our services and how we can help you succeed.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

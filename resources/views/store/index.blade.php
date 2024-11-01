@extends('partials.app')

@section('content')

    <!-- Hero Section -->
    @include('partials.hero')

        <!-- Top Categories Section -->
<section id="top-categories" class="py-5" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-5">Top Categories</h2>
        <div class="row">
            <div class="col-md-4" data-aos="fade-up">
                <div class="card custom-card">
                    <img src="{{ asset('images/men3.jpg') }}" class="card-img-top" alt="Category 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Men</h5>
                        <a href="{{ url('/shop') }}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up">
                <div class="card custom-card">
                    <img src="{{ asset('images/top-2.jpg') }}" class="card-img-top" alt="Category 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Women</h5>
                        <a href="{{ url('/shop') }}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up">
                <div class="card custom-card">
                    <img src="{{ asset('images/top-3.jpg') }}" class="card-img-top" alt="Category 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kid</h5>
                        <a href="{{ url('/shop') }}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- New Arrivals Section -->
<section id="new-arrivals" class="py-5" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-5">New Arrivals</h2>
        <div class="row">
            <div class="col-md-4" data-aos="fade-up">
                <div class="card custom-card">
                    <img src="{{ asset('images/men1.jpg') }}" class="card-img-top" alt="New Arrival 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">New Arrival 1</h5>
                        <a href="{{ url('/shop/newarrival1') }}" class="btn btn-success">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up">
                <div class="card custom-card">
                    <img src="{{ asset('images/women1.jpg') }}" class="card-img-top" alt="New Arrival 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">New Arrival 2</h5>
                        <a href="{{ url('/shop/newarrival2') }}" class="btn btn-success">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up">
                <div class="card custom-card">
                    <img src="{{ asset('images/kid1.jpg') }}" class="card-img-top" alt="New Arrival 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">New Arrival 3</h5>
                        <a href="{{ url('/shop/newarrival3') }}" class="btn btn-success">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Special Offers Section -->
<section id="special-offers" class="py-5" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-4">Exclusive Special Offers</h2>
        <p class="text-center mb-5">Don’t miss out on our limited-time offers! Grab your favorite items now.</p>
        <div class="text-center">
            <a href="{{ url('/shop') }}" class="btn btn-danger btn-lg">Shop Now</a>
        </div>
    </div>
</section>
<!-- Newsletter Signup Section -->
<section id="newsletter-signup" class="py-5 bg-light" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-4">Stay Updated</h2>
        <p class="text-center mb-5">Subscribe to our newsletter and be the first to know about new arrivals and exclusive offers.</p>
        <div class="text-center">
            <a href="#subscribe" class="btn btn-primary btn-lg">Subscribe Now</a>
        </div>
    </div>
</section>



@endsection

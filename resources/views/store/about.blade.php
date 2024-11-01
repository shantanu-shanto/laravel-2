@extends('partials.app')

@section('content')

<!-- About Us Intro Section -->
<section id="about-intro" class="py-5" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-5">Who We Are</h2>
        <p class="text-center lead">
            Welcome to [Your Company Name], your trusted clothing store. With a commitment to quality and style, we offer a wide range of products to meet all your fashion needs.
        </p>
    </div>
</section>

<!-- Our Team or Company Values Section -->
<section id="team-values" class="py-5" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-5">Meet Our Team</h2>
        <div class="row">
            <!-- Team Member 1 -->
            <div class="col-md-4" data-aos="fade-up">
                <div class="card custom-card">
                    <img src="{{ asset('images/ceo.jpg') }}" class="card-img-bottom" alt="Team Member 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">CEO & Founder</p>
                        <p class="card-text">John is the visionary behind [Your Company Name]. His passion for fashion drives the company forward.</p>
                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="col-md-4" data-aos="fade-up">
                <div class="card custom-card">
                    <img src="{{ asset('images/team3.jpg') }}" class="card-img-bottom" alt="Team Member 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="card-text">Creative Director</p>
                        <p class="card-text">Jane leads the creative team with her innovative ideas and keen eye for style.</p>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="col-md-4" data-aos="fade-up">
                <div class="card custom-card">
                    <img src="{{ asset('images/team4.jpg') }}" class="card-img-bottom" alt="Team Member 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Michael Brown</h5>
                        <p class="card-text">Head of Marketing</p>
                        <p class="card-text">Michael drives the marketing strategies that help [Your Company Name] grow its customer base.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

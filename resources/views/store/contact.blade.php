@extends('partials.app')

@section('content')

<!-- Contact Us Intro Section -->
<section id="contact-intro" class="py-5" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-5">Get in Touch</h2>
        <p class="text-center lead">
            We'd love to hear from you! Whether you have a question about our products, need support, or just want to get in touch, feel free to contact us.
        </p>
    </div>
</section>

<!-- Contact Information Section -->
<section id="contact-info" class="py-5" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <!-- Contact Address Card -->
            <div class="col-md-4" data-aos="fade-up">
                <div class="card custom-card">
                    <img src="{{ asset('images/visitus.jpg') }}" class="card-img-top" alt="Our Location">
                    <div class="card-body text-center">
                        <h5 class="card-title">Our Location</h5>
                        <p class="card-text">123 Fashion Street, New York, NY, USA</p>
                    </div>
                </div>
            </div>

            <!-- Contact Email Card -->
            <div class="col-md-4" data-aos="fade-up">
                <div class="card custom-card">
                    <img src="{{ asset('images/emailus.jpg') }}" class="card-img-top" alt="Contact Email">
                    <div class="card-body text-center">
                        <h5 class="card-title">Email Us</h5>
                        <p class="card-text">support@yourcompany.com</p>
                    </div>
                </div>
            </div>

            <!-- Contact Phone Card -->
            <div class="col-md-4" data-aos="fade-up">
                <div class="card custom-card">
                    <img src="{{ asset('images/callus.jpg') }}" class="card-img-top" alt="Contact Phone">
                    <div class="card-body text-center">
                        <h5 class="card-title">Call Us</h5>
                        <p class="card-text">+1 (234) 567-890</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Embedded Google Form Section -->
<section id="contact-form" class="py-5" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-5">Fill Out Our Contact Form</h2>
        <div class="d-flex justify-content-center">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdl1sSwPzRglCQ-lWYAkO8oZiw6MH-BhyVKd3NUiO2dpmGNFA/viewform?embedded=true" width="640" height="551" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        </div>
    </div>
</section>

@endsection

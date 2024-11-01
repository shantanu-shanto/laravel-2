<section id="hero-carousel">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="1000">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url('{{ asset('images/1st-carosal.jpg') }}'); height: 100vh; background-size: cover; background-position: center;">
                <div class="carousel-container">
                    <div class="container text-center">
                        <h2 class="animate__animated animate__fadeInDown" style="color: #ffffff; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Welcome to Fashion Store</h2>
                    
                        <a href="{{ url('/shop') }}" class="btn btn-primary animate__animated animate__fadeInUp">Shop Now</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url('{{ asset('images/2nd-carosal.jpg') }}'); height: 100vh; background-size: cover; background-position: center;">
                <div class="carousel-container">
                    <div class="container text-center">
                        <h2 class="animate__animated animate__fadeInDown" style="color: #ffffff; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">New Arrivals</h2>
                        
                        <a href="{{ url('/shop') }}" class="btn btn-success animate__animated animate__fadeInUp">Explore</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url('{{ asset('images/3rd-carosal.jpg') }}'); height: 100vh; background-size: cover; background-position: center;">
                <div class="carousel-container">
                    <div class="container text-center">
                        <h2 class="animate__animated animate__fadeInDown" style="color: #d9ff00; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Exclusive Offers</h2>
                        
                        <a href="{{ url('/shop') }}" class="btn btn-warning animate__animated animate__fadeInUp">Grab the Deals</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</section>


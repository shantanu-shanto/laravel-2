<nav class="navbar navbar-expand-lg custom-navbar" data-aos="fade-down">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/clothlogo.jpg') }}" alt="Fashion Store Logo" style="height: 50px;">
            Fashion Store
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('shop') ? 'active' : '' }}" href="{{ url('/shop') }}">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white {{ Request::is('shop') ? 'active' : '' }}" href="{{ url('/shop') }}">Shop Now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


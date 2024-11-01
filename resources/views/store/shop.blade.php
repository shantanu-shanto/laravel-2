@extends('partials.app')


@section('content')

    <!-- Men Section -->
    <section id="men-products" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Men's Collection</h2>
            <div class="row">
                @for ($i = 1; $i <= 6; $i++)
                <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                    <div class="card custom-card" data-aos="fade-up">
                        <img src="{{ asset('images/men'.$i.'.jpg') }}" class="card-img-top" alt="Men Product {{ $i }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">Men's Product {{ $i }}</h5>
                            <a href="{{ url('/shop/men'.$i) }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Women Section -->
    <section id="women-products" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Women's Collection</h2>
            <div class="row">
                @for ($i = 1; $i <= 6; $i++)
                <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                    <div class="card custom-card" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                        <img src="{{ asset('images/women'.$i.'.jpg') }}" class="card-img-top" alt="Women Product {{ $i }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">Women's Product {{ $i }}</h5>
                            <a href="{{ url('/shop/women'.$i) }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Kids Section -->
    <section id="kids-products" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Kids' Collection</h2>
            <div class="row">
                @for ($i = 1; $i <= 3; $i++)
                <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                    <div class="card custom-card" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                        <img src="{{ asset('images/kid'.$i.'.jpg') }}" class="card-img-top" alt="Kids Product {{ $i }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kids' Product {{ $i }}</h5>
                            <a href="{{ url('/shop/kids'.$i) }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>

@endsection

@extends('master')
@section("content")
<div class="custom-product">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($products->take(3) as $key => $item)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$key}}" class="{{$key == 0 ? 'active' : ''}}" aria-label="Slide {{$key + 1}}"></button>
            @endforeach
        </div>

        <div class="carousel-inner">
            @foreach ($products->take(3) as $key => $item)
                <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                    <a href="detail/{{$item['id']}}">
                        <img class="slider-img" src="{{$item['gallery']}}">
                        <div class="carousel-caption">
                            <h3>{{$item['name']}}</h3>
                            <p>{{$item['description']}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <script>
            // Custom JavaScript to handle looping of the carousel
            var carousel = document.getElementById('carouselExampleCaptions');
            var carouselInstance = new bootstrap.Carousel(carousel);

            carousel.addEventListener('slide.bs.carousel', function(event) {
                var totalItems = {{$products->count()}};
                var currentSlide = event.to;
                if (currentSlide >= totalItems) {
                    carouselInstance.to(0); // Loop back to the first slide after the last slide
                } else if (currentSlide < 0) {
                    carouselInstance.to(totalItems - 1); // Loop back to the last slide after the first slide
                }
            });
        </script>
        <div class="product-all">
            <h1>All Product</h1>
            <div class="container">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-4 mb-4">
                            <div class="card custom-card">
                                <a href="detail/{{$product['id']}}">
                                    <img src="{{ $product->gallery }}" class="card-img-top" alt="{{ $product->name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name }}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection

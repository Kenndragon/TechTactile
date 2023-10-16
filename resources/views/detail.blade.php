@extends('master')
@section("content")
<div class="container detail-page">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <div class="detail-info">
                <a href="/">Back</a>
                <h1>{{$product['name']}}</h1>
                <h3>Price: Rp {{ number_format($product['price'], 0, ',', '.') }},00</h3>
                <h3>Brand: {{$product['brand']}}</h3>
                <h4>Description: {{$product['description']}}</h4>
                <br><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value={{$product['id']}}>
                    <button class="btn btn-primary">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

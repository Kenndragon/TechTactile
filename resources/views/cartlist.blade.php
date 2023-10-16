@extends('master')
@section("content")
<div class="custom-cartlist">
    <div class="col-sm-10">
        <div class="cartlist-all">
            <h4>Result for Products</h4>
            <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
            @foreach($products as $item)
            <div class=" row searched-item cart-list-devider">
                <div class="col-sm-3">
                        <img class="cartlist-image" src="{{$item->gallery}}">
                </div>
                <div class="col-sm-3">
                    <div class="cartlist-info">
                        <h3>{{$item->name}}</h3>
                        <h5>{{$item->description}}</h5>
                        <h5>Rp{{ number_format($item->price, 0, ',', '.') }},00</h5>
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove from Cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection 
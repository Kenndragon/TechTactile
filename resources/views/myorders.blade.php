@extends('master')
@section("content")
<div class="custom-cartlist">
     <div class="col-sm-10">
        <div class="cartlist-all">
            <h1>My Order </h1>
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="cartlist-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="myorder-info">
                      <h3>Name : {{$item->name}}</h3>
                      <h5>Address : {{$item->address}}</h5>
                      <h5>Payment Method : {{$item->payment_method}}</h5>
                    </div>
             </div>
            </div>
            @endforeach
          </div>

     </div>
</div>
@endsection 
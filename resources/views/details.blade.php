@extends('master')
@section("content")
<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="/image/{{ $product->image }}" alt="">
       </div>
       <div class="col-sm-6">
           <a href="/home">Go Back</a>
       <h3>{{$product['name']}}</h2>
        <hr>
       <h3 style="color: red;">Price : {{$product['price']}}</h3>
       <h4>Engine: {{$product['engine']}}</h4>
       <h4>Mileage: {{$product['mileage']}}</h4>
       <h4>Top Speed: {{$product->speed}}</h4>
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$product['id']}}>
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>
       <button class="btn btn-success">Buy Now</button>
       <br><br>
    </div>
   </div>
</div>
@endsection
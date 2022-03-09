@extends('master')
@section("content")
    <div class="custom-product" style="background-color:orange;">
            <div class="col-sm-4">
                {{-- <a href="#">Filter</a> --}}
            </div>
              <div class="col-sm-4" >
                     <div class="trending-wrapper">
                           <h4 style="color:blue;">Result for Search Product</h4>
                              @foreach($products as $item)
                                    <div class="searched-item">
                                          <a href="details/{{$item->id}}">
                                             <img class="trending-image" src="/image/{{ $item->image }}">
                                                <div class="">
                                                  <h2>{{$item->name}}</h2>
                                                  <h5>Price TK:{{$item->price}}</h5>
                                                </div>
                                          </a>
                                    </div>
                              @endforeach
                     </div>
              </div>
    </div>
@endsection
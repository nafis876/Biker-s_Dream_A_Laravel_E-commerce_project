@extends('master')
@section("content")
<div class="custom-product">
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
           <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
         
           <!-- Wrapper for slides -->
              <div class="carousel-inner">
                     @foreach ($products1 as $item)
                           <div class="item {{$item->id ==2?'active':''}}">
                                     <a href="details/{{$item['id']}}">
                                         <img class="slider-img" src="/image/{{ $item->image }}">
                                             <div class="carousel-caption slider-text">
                                               <h3 style="color: aqua;">{{$item->name}}</h3>
                                               <p style="color:red;">{{$item->price}}</p>
                                             </div>
                                     </a>
                            </div>
               
                     @endforeach
              </div>
         
           <!-- Left and right controls -->
                   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left"></span>
                     <span class="sr-only">Previous</span>
                   </a>
                       <a class="right carousel-control" href="#myCarousel" data-slide="next">
                         <span class="glyphicon glyphicon-chevron-right"></span>
                         <span class="sr-only">Next</span>
                       </a>
         </div>
         <hr>

      {{-- card --}}
              <div class="trending-wrapper">
                     <div class="row">
                         <div class="text-center">
                           <h3 >Tredning Products</h3>
                         </div>
                         <hr>
                             @foreach($products1 as $item)
                              <div class="card">
                                       <div class="col-md-4 col-sm-12">
                                                  <div class="trening-item">
                                                         <a href="details/{{$item['id']}}">
                                                            <img class="trending-image" src="/image/{{ $item->image }}">
                                                                 <div class="">
                                                                    <h3>{{$item['name']}}</h3>
                                                                 </div>
                                                          </a>
                                                    </div>
                                       </div>
                              </div>
                             @endforeach
                        </div>
              </div>
      
        <hr>

      {{-- New card view --}}
      
      
            <div class="container-fulid" style="margin-left: 50px;">
            
                  <div class="text-center">
                      <h3 style="color: red; margin-top:20px; margin-bottom:20px">Show All Bikes</h3>
                  </div>
                     @foreach($products2 as $item)
          
                          <div class="col-md-3 col-sm-12 border border-dark shadow-lg">
                                 <div class="card" style="width: 18rem;">
                                      <img class="card-img-top" src="/image/{{ $item->image }}" alt="Card image cap">
                                          <div class="card-body">
                                            <h5 class="card-title">{{$item['name']}}</h5>
                                            <hr>
                                            <p class="card-text"  style="background-color:red;">Engine : {{$item->engine}}</p>
                                            <p class="card-text"  style="background-color:blue;">Speed : {{$item->speed}}</p>
                                            <p class="card-text"  style="background-color:rgb(67, 126, 19);">Mileage : {{$item->mileage}}</p>
                                  
                                  
                                            <a href="details/{{$item->id}}" class="btn btn-primary">Details</a>
                                          </div>
                                   </div>
                           </div>
                     @endforeach
                {{-- End --}}
             </div>
  </div>

@endsection
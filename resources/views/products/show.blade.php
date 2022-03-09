@extends('products.layout')
   
@section('content')
     <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2 style="color: dimgrey;"> Show Product Details Below ::)</h2>
            </div>
        </div>
     </div>

     <div class="modal-body row">
         <div class="col-md-6 col-xs-12 col-sm-12 ">
          
             <div class="form-group">
                <strong>Image:</strong>
                <img src="/image/{{ $product->image }}" width="500px">
             </div>
         </div>
         <div class="col-md-6 col-xs-12 col-sm-12 ">
          
              <div class="form-group" style="color: black">
                {{-- <strong>Name:</strong> --}}
                 <h3><strong> {{ $product->name }} Price in Bangladesh </strong></h3>
               </div>
              <hr>

              <div class="form-group" style="color: red">
                   <h2><strong>TK. {{ $product->price }}</strong></h2>
                
              </div>
           </div>
     </div>


      {{-- table create  --}}
      
    


      {{-- table create  --}}



     <hr>
      <div class="row">
          <div class="text-center">

              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                       <strong>Engine:</strong>
                       {{ $product->engine }}
                   </div>
             </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Top Speed:</strong>
                       {{ $product->speed }}
                   </div>
             </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                      <strong>Mileage per Litter:</strong>
                       {{ $product->mileage }}
                   </div>
               </div>
        </div>
        
      </div>

      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
@endsection
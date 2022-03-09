@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <hr>
        <div class="text-center">
            <h2 style="color: blueviolet;">Add New Bike Information Here !! :)</h2>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Bike Name:</strong>
                       <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                   </div>
               </div>


                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                              <strong>Engine:</strong>
                              <input type="text" name="engine" id="engine" class="form-control" placeholder="Engine">
                          </div>
                      </div>
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                  <div class="form-group">
                                      <strong>Top Speed:</strong>
                                      <input type="text" name="speed" id="speed" class="form-control" placeholder="Top Speed">
                                  </div>
                              </div>
                     <div class="col-xs-12 col-sm-12 col-md-12">
                         <div class="form-group">
                             <strong>Mileage:</strong>
                             <input type="text" name="mileage" id="mileage"  class="form-control" placeholder="Mileage">
                         </div>
                     </div>
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                  <div class="form-group">
                                      <strong>Price:</strong>
                                      <input type="text" name="price" id="price" class="form-control" placeholder="Price">
                                  </div>
                              </div>
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                              <strong>Image:</strong>
                                              <input type="file" name="image" class="form-control" placeholder="image">
                                          </div>
                                      </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

    <hr>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
</div>
     
</form>
@endsection
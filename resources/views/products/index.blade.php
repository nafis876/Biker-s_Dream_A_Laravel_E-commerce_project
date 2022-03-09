@extends('products.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2 style="color: blue;"><em><u><strong> Information About Product </strong></u></em></h2>
            </div>
        </div>
    </div>
    <hr>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered" style="background-color: beige;">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Bike Name</th>
            <th>Engine</th>
            <th>Top Speed</th>
            <th>Mileage</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $product->image }}" width="100px"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->engine }}</td>
            <td>{{ $product->speed }}</td>
            <td>{{ $product->mileage }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a> |
      
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a> |
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


    <hr>
    <div class="row">
        <div class="col-lg-12 margin-tb">
          <div class="text-center">
              <a class="btn btn-info" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
    
    {!! $products->links() !!}
        
@endsection
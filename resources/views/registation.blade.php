@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/rs" method="POST" >
                @csrf
                <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12">
                             <div class="form-group">
                                 <strong>User Name:</strong>
                                 <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                             </div>
                          </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                         <div class="form-group">
                                             <strong>Password:</strong>
                                             <input type="text" name="password" id="password" class="form-control" placeholder="Password">
                                         </div>
                                     </div>
                                     
                                     <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                           <button type="submit" class="btn btn-primary">registation</button>
                                      
                                                  <div class="pull-right">
                                                    <a class="btn btn-primary" href="/login">Login</a>
                                                  </div>
                                      </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection
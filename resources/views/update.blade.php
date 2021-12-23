@extends('layout')

@section('content')

<div class="col-sm-6">
<h1>Edit Records</h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<form action="/update" method="post" enctype="multipart/form-data">

<input type="hidden" name="did" value="{{$data->id}}" >

<div class="mb-3">
    <label  class="form-label">FirstName</label>
    <input type="text" name="fname"  class="form-control" value="{{$data->fname}}">
  </div>

  <div class="mb-3">
    <label  class="form-label">LastName</label>
    <input type="text" name="lname"  class="form-control" value="{{$data->lname}}">
  </div>
  
@csrf
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" value="{{$data ->email}}"  >
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Address</label>
    <input type="textarea" name="address"  class="form-control" value="{{$data ->address}}"  >
  </div>
  
  <div class="mb-3">
    <label  class="form-label">Gender:</label>
    <input type="text" name="gender"  class="form-control" value="{{$data ->gender}}"  >

    </div>

  <div class="mb-3">
    <label  class="form-label">Image</label>
    <input type="file" name="image"  class="form-control" >
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</a></button>
  <!-- <a href="{{action('studentcontroller@update')}}">
   -->
</form>



</div>
@stop
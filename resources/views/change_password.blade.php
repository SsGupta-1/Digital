@extends('layout')


@section('content')
<div class="col-sm-6">
    <h3>Change Your Password</h3>

  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
    
 <form  method="post" action="/update_password">
   
 @csrf

 <div class="mb-3">
  <label  class="form-label">Current Password</label>
    <input type="password" name="current_password" class="form-control" >
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
  <label  class="form-label">New Password</label>
    <input type="password" name="password" class="form-control" >
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <div class="mb-3">
    <label  class="form-label">Confirm Password</label>
    <input type="password" name="confirm_password" class="form-control" >
    @error('confirm_password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="border-top card-body text-center">Go for  <a href="register">Register</a></div>
</div>

@stop
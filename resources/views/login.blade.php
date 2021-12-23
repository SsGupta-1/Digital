@extends('layout')


@section('content')
<div class="col-sm-6">
    <h3>Student Login </h3>

  <!-- @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif -->

 <form  method="post" action="login" id="login">
   
 @csrf
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" name="email"  class="form-control" >
    <!-- @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror -->
  </div>
  
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" name="password"  class="form-control" >
    <i class="showPassword "></i>
    <!-- @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror -->
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="border-top card-body text-center">Go for  <a href="register">Register</a></div>
</div>

@endsection

@section('after-script')
<script type="text/javascript">
$(document).ready(function(){
    jQuery.validator.addMethod("validateEmail", function(value, element, param) {

      return value = value.replace(/\(|\)|\s+|-/g, ""), this.optional(element) || value.length > 5 && value.match(/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/);

      }, "Please enter a valid email address");


  $("#login").validate({
          
          rules: {
            email:{
              required:true,
               validateEmail:true,
              email : true
            },
            password:{
              required:true,
              minlength : 6
            }
          },
          messages:{
            email: {
                       required: "*Please enter email.",
                       email : "Please enter valid email."
               
           },
            password: {
                       required: "*Please enter password."
               
           }
          }
       });

});
</script>
@endsection

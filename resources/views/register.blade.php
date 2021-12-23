@extends('layout')


@section('content')
<div class="col-sm-6">
    <h3>Student registration </h3>
    

    <form  method="post" action="register" enctype="multipart/form-data" id="register">
    <div class="mb-3">
    <label  class="form-label">FirstName</label>
    <input type="text" name="fname"  class="form-control" >
    <!-- @error('fname')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror -->
  </div>

  <div class="mb-3">
    <label  class="form-label">LastName</label>
    <input type="text" name="lname"  class="form-control" >
    <!-- @error('lname')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror -->
  </div>
  
@csrf
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" >
    <!-- @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror -->
  </div>

  <div class="mb-3">
    <label  class="form-label">Address</label>
    <input type="textarea" name="address"  class="form-control" >
    <!-- @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror -->
  </div>
    
  
  <div class="mb-3">
    <label  class="form-label">Gender:</label>
    <input type="radio" name="gender" value="M" class="form-check-input" >Male
    <input type="radio" name="gender" value="F"  class="form-check-input">Female
  </div>

  <div class="mb-3">
    <label  class="form-label">Image</label>
    <input type="file" name="image"  class="form-control" >
    <!-- @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror -->
  </div>
  

  <div class="mb-3">
    <label  class="form-label"  >Password</label>
    <input type="password" name="password" class="form-control" >
    <!-- @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror -->
  </div>
  

  <div class="mb-3">
    <label  class="form-label">Confirm Password</label>
    <input type="password" name="cnfpass" class="form-control" >
    <!-- @error('cnfpass')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror -->
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div class="border-top card-body text-center">Have an account? <a href="login">Log In</a></div>
</div>

@endsection

@section('after-script')
<script type="text/javascript">
$(document).ready(function(){
  jQuery.validator.addMethod("validateEmail", function(value, element, param) {

  return value = value.replace(/\(|\)|\s+|-/g, ""), this.optional(element) || value.length > 5 && value.match(/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/);

  }, "Please enter a valid email address");


  $("#register").validate({
          
          rules: {
            fname:{
              required:true,
             
            },
            lname:{
              required:true,
              
            },
            email:{
              required:true,
               validateEmail:true,
              email : true
            },
            password:{
              required:true,
              minlength : 6,
              
            },
            cnfpass:{
              required:true,
              minlength : 6,
              
            }
          },

          messages:{
            fname:{
                    required: "*Please enter first name"
            },
            lname:{
                      required: "*Please enter last name"
            },
            email: {
                       required: "*Please enter email.",
                       email : "Please enter valid email."
               
           },
            password: {
                       required: "*Please enter password."
               
           },
           cnfpass:{
                     required: "*Please enter confirm  password."

           }
          }
       });

});
</script>
@endsection

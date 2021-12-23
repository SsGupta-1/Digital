@extends('../layout')

@section('content')
<div class="col-sm-6">
    <h3>Add Student Details</h3>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    

    <form  method="post" action="/students_adddetails" enctype="multipart/form-data">
    <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" name="name"  class="form-control" >
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label  class="form-label">Physics</label>
    <input type="number" name="physics"  class="form-control" min="1" max="100">
    @error('physics')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
@csrf
  <div class="mb-3">
    <label  class="form-label">Chemistry </label>
    <input type="number" name="chemistry" class="form-control" min="1" max="100" >
    @error('chemistry')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label  class="form-label">Biology</label>
    <input type="number" name="biology"  class="form-control" min="1" max="100">
    @error('biology')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
    
  

  <div class="mb-3">
    <label  class="form-label">Math</label>
    <input type="number" name="math"  class="form-control" min="1" max="100" >
    @error('math')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  

  <div class="mb-3">
    <label  class="form-label"  >Psychology</label>
    <input type="number" name="psychology" class="form-control" min="1" max="100">
    @error('psychology')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection



@extends('adminlayout')

<!-- Hello {{Session::get('user')}}

    <input type="text" name="name" class="form-control"  value="{{(Session::get('user')->fname)}}"> -->

    @section('content')
<div class="content-wrapper">
					<div class="profile-header px-3 mb-4 pb-3">
						<div class="header-bg" style="background-image: url('{{asset('images/bg.jpeg')}}')"></div>
						<div class="profile-pic mt-5">
							<div class="tumbnail">
								<img  class="rounded-circle z-depth-2" style="height: 150px;"src="{{asset('uploads/students/'.(Session::get('user')->image))}}" alt="avatar" data-holder-rendered="true">
							</div>
						</div>
						<div class="float-md-right">
							<a href="#" class="btn btn-secondary rounded-sm px-5">Edit</a>
						</div>
					</div>
					<div class="row px-3 profile-card mb-5 mt-3">
						<div class="col-sm-6 col-lg-6 mb-3">
							<div class="card xs-shadow border-radius-xs">
								<div class="card-body px-4 py-4">
									<h6 class="text-black">First Name</h6>
									<h4 class="text-black mb-0">{{(Session::get('user')->fname)}}</h4>
								</div>
							</div>
						</div>
                        <div class="col-sm-6 col-lg-6 mb-3">
							<div class="card xs-shadow border-radius-xs">
								<div class="card-body px-4 py-4">
									<h6 class="text-black">Last Name</h6>
									<h4 class="text-black mb-0">{{(Session::get('user')->lname)}}</h4>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6 mb-3">
							<div class="card xs-shadow border-radius-xs">
								<div class="card-body px-4 py-4">
									<h6 class="text-black">Email</h6>
									<h4 class="text-black mb-0">{{(Session::get('user')->email)}}</h4>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6 mb-3">
							<div class="card xs-shadow border-radius-xs">
								<div class="card-body px-4 py-4">
									<h6 class="text-black">Address</h6>
									<h4 class="text-black mb-0">{{(Session::get('user')->address)}}</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection



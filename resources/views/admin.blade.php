@php
 $totalUsers = usercount();
 $totalstudent = studentcount();
@endphp

@extends('adminlayout')

@section('content')
        <div class="content-wrapper">
            <div class="heading mt-3 mb-4">
                <h3 class="text-default weight-700">Dashboard</h3>
            </div>
            <div class="row mx-n2">
                <div class="col-md-4 px-4 ">
                    <div class="card  ">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="left">
                                <h4 class="font-weight-normal mb-4">Total Users</h4>
                                <h3 class="mb-4">{{$totalUsers}}</h3>
                            </div>
                            
                                <i class="fas fa-users"></i>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card card-img-holder text-default text-right">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="left">
                                <h4 class="font-weight-normal mb-4">Total students</h4>
                                <h3 class="mb-4">{{$totalstudent}}</h3>
                            </div>
                            <div class="right">
                            <i class="fas fa-users"></i>

                            </div>
                        </div>
                    </div>
                </div>
        </div>

<div class="row m-t-25">
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c1">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    
                    <div class="text">
                    <span>Total Users</span>
                        <h2>{{$totalUsers}}</h2>
                        
                    </div>
                    <div class="right icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c2">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    
                    <div class="text">
                        
                        <span>Total students</span>
                        <h2>{{$totalstudent}}</h2>
                    </div>
                    <div class="icon">
                        <i class="zmdi zmdi-accounts-alt"></i>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>                           
@stop
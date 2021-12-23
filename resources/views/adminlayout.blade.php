@php
    $countNotification = notificationCount();
	$notifications = notification();
	
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin Panel</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">

     <!-- Toastr css-->
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
   <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
<style>

</style>
@toastr_css

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-sm-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <!-- <img src="images/icon/logo.png" alt="CoolAdmin" /> -->
                            Admin Dashboard
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile ">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                
                       
                            <li>
                            <a href="/"><i class="fas fa-home"></i>Home </a>
                                    
                        </li>
                            
                        <li>
                                <a href="demo"> <i class="fas fa-table"></i>View Records</a>
                                   
                        </li>

                        <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-user"></i>Student Details</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="/students_adddetails">Add Details</a>
                                    </li>
                                    <li>
                                        <a href="/students_viewdetails">viewdetails</a>
                                    </li>
                                
                                </ul>
                         </li>
                         <li>
                        <a href="/send-notification"><i class="fas fa-bell"></i>Send Notification </a>
                        </li>
                       
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-sm-block">
            <div class="">
                <a href="#" class="admin">
                    <!-- <img src="images/icon/logo.png" alt="Cool Admin" /> -->
                    Admin Dashboard
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                   <ul class="list-unstyled navbar__list">
                        
                        
                        <li>
                            <a href="/"><i class="fas fa-home"></i>Home </a>
                                    
                        </li>
                            
                        <li>
                                <a href="demo"> <i class="fas fa-table"></i>View Records</a>
                                   
                        </li>

                        <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-user"></i>Student Details</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="/students_adddetails">Add Details</a>
                                    </li>
                                    <li>
                                        <a href="/students_viewdetails">viewdetails</a>
                                    </li>
                                
                                </ul>
                         </li>
                        
                       
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-book"></i>Book record</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="/bookissue">Book issue</a>
                                </li>
                                <li>
                                    <a href="#">Book submit</a>
                                </li>
                                <li>
                                    <a href="#">Show records</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                        <a href="/send-notification"><i class="fas fa-bell"></i>Send Notification </a>
                        </li>
                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form action="">
                                
                            </form>
                            <!-- <form class="form-header" action="/search" method="GET">
                                <input class="au-input au-input--xl" type="search" name="search" placeholder="Search for datas " id="search" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form> -->
                            <div class="header-button">
                                <div class="noti-wrap"> 
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">{{$countNotification}}</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have {{$countNotification}} Notifications</p>
                                            </div>
                                            @foreach($notifications as $notificationsMsg)
                                            <div class="notifi__item">
                                              
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-notifications-active"></i>
                                                </div>
                                                <div class="content">
                                                    <p>{{$notificationsMsg->message}}</p>
                                                        <div class="date">{{$notificationsMsg->created_at}}</div>
                                                </div>
                                               
                                            </div>
                                            @endforeach
                                            
                                            <div class="notifi__footer">
                                                <a href="/notification">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{asset('uploads/students/'.(Session::get('user')->image) )}}" alt="" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{(Session::get('user')->fname)}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{asset('uploads/students/'.(Session::get('user')->image))}}" alt="" />
                                                        
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{(Session::get('user')->fname)}}</a>
                                                    </h5>
                                                    <span class="email">{{(Session::get('user')->email)}}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="/profile">
                                                        <i class="zmdi zmdi-account"></i>profile</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="/change_password">
                                                        <i class="zmdi zmdi-lock"></i>change-password</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="/logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                            @yield('content')
                            </div>
                        </div>
                       
                     <div>
                          
                </div>
                        
                         
                   <!-- END MAIN CONTENT-->
                  
            </div>

             <!-- END PAGE CONTAINER-->
        </div>

    <!-- Jquery JS-->
    <script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('js/main.js')}}"></script>

 <!-- Toastr-->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->


<!-- <script type="text/javascript"  src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script> -->
  <script src="{{asset('js/datatables.min.js')}}"></script>
  <script>
//   $(function(){
//     $("#search").dataTable();
//   })
  $(document).ready(function() {
    $('#search').DataTable();
} );
Table = $('#search').DataTable();   
$('#search').keyup(function(){
      Table.search($(this).val()).draw() ;
});
  </script>

@toastr_js
    @toastr_render


</body>

</html>
<!-- end document-->

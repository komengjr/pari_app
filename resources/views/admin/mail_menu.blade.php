<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>{{Auth::user()->name}} :: PARI KALBAR</title>
  <!--favicon-->
  <link rel="icon" href="{{ url('logo-pari.png', []) }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ url('assets/plugins/summernote/dist/summernote-bs4.css', []) }}"/>
  <!-- simplebar CSS-->
  <link href="{{ url('assets/plugins/simplebar/css/simplebar.css', []) }}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ url('assets/css/bootstrap.min.css', []) }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ url('assets/css/animate.css', []) }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ url('assets/css/icons.css', []) }}" rel="stylesheet" type="text/css"/>
  <!-- Horizontal menu CSS-->
  <link href="{{ url('assets/css/horizontal-menu.css', []) }}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ url('assets/css/app-style.css', []) }}" rel="stylesheet"/>
 
  
  
</head>

<body>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start topbar header-->
<header class="topbar-nav">
    <nav class="navbar navbar-expand">
     <ul class="navbar-nav mr-auto align-items-center">
       <li class="nav-item">
         <a class="nav-link" href="javascript:void();">
           <div class="media align-items-center">
              <img src="logo-pari.png" class="logo-icon" alt="logo icon">
             <div class="media-body">
               <h5 class="logo-text">AP PARI</h5>
             </div>
           </div>
        </a>
       </li>
       <li class="nav-item">
         <form class="search-bar">
           <input type="text" class="form-control" placeholder="Enter keywords">
            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
         </form>
       </li>
     </ul>
        
     <ul class="navbar-nav align-items-center right-nav-link">
   
       <li class="nav-item">
         <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
           <span class="user-profile"><img src="img.png" class="img-circle" alt="user avatar"></span>
         </a>
         <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item user-details">
           <a href="javaScript:void();">
              <div class="media">
                <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
               <div class="media-body">
                 <h6 class="mt-2 user-title">{{auth::user()->name}}</h6>
                 <p class="user-subtitle">{{auth::user()->nir}}</p>
               </div>
              </div>
             </a>
           </li>
           
           <li class="dropdown-item"><i class="icon-power mr-2"> <a  href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
            </a></i> 
   
            </li>
         </ul>
       </li>
     </ul>
   </nav>
   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
   </form>
</header>
<!--End topbar header-->

<!-- start horizontal Menu -->
    <nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
            <h3>{{Auth::user()->name}}</h3>
            <button type="button" id="menu-btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        
        <ul id="respMenu" class="horizontal-menu">
        
            <li>
                <a href="javascript:;">
                    <i class="zmdi zmdi-view-dashboard" aria-hidden="true"></i>
                    <span class="title">Dashboard</span>
                    <span class="arrow"></span>
                </a>
                <!-- Level Two-->
                <ul>
                    <li><a href="{{ url('home', []) }}"><i class="zmdi zmdi-dot-circle-alt"></i> Home</a></li>
                    
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="zmdi zmdi-view-dashboard" aria-hidden="true"></i>
                    <span class="title">Mail</span>
                    <span class="arrow"></span>
                </a>
                <!-- Level Two-->
                <ul>
                    <li><a href="{{ url('mail', []) }}"><i class="zmdi zmdi-dot-circle-alt"></i> Kirim Pesan</a></li>
                    
                </ul>
            </li>
          
            
        </ul>
    </nav>
    <!-- end horizontal Menu -->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Mail Compose</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Mail</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mail Compose</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
           <div class="card-body">

        <div class="row">
        
            <!-- Left sidebar -->
            
            <!-- End Left sidebar -->
                    
        <!-- Right Sidebar -->
        <div class="col-lg-12 col-md-8">
            
            <div class="card mt-3 shadow-none">
                <div class="card-body">
                    <form>
                       
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <select name="" id="" class="form-control">
                                        <option value=""></option>
                                        <option value="">All</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="email" class="form-control" placeholder="Bcc">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="summernoteEditor" placeholder="Message body" style="height: 200px"></textarea>
                        </div>
                        <div class="form-group" style="float: right;">
                            <button type="button" class="btn btn-primary waves-effect waves-light m-1"><i class="fa fa-floppy-o mr-1"></i> Send</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light m-1"><i class="fa fa-trash-o mr-1"></i> Draft</button>
                            <button type="button" class="btn btn-white waves-effect waves-light m-1"><i class="fa fa-send mr-1"></i> <span>Discard</span> </button>
                        </div>
                    </form>
                </div> <!-- card body -->
             </div> <!-- card -->
           </div> <!-- end Col-9 -->
         </div><!-- End row -->
      </div>
    </div>
  </div>
 </div><!-- End row -->
<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2019 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="{{ url('assets/js/jquery.min.js', []) }}"></script>
  <script src="{{ url('assets/js/popper.min.js', []) }}"></script>
  <script src="{{ url('assets/js/bootstrap.min.js', []) }}"></script>
	
	<!-- simplebar js -->
  <script src="{{ url('assets/plugins/simplebar/js/simplebar.js', []) }}"></script>
  <!-- horizontal-menu js -->
  <script src="{{ url('assets/js/horizontal-menu.js', []) }}"></script>
  
  <!-- Custom scripts -->
  <script src="{{ url('assets/js/app-script.js', []) }}"></script>
  
  <script src="{{ url('assets/plugins/summernote/dist/summernote-bs4.min.js', []) }}"></script>
  <script>
   $('#summernoteEditor').summernote({
            height: 400,
            tabsize: 2
        });
  </script>
	
</body>
</html>

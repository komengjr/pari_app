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
  <link rel="stylesheet" type="text/css" href="{{ url('assets/plugins/jquery.steps/css/jquery.steps.css', []) }}">
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
  <link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
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
                    <span class="title">Nilai</span>
		            <span class="arrow"></span>
                </a>
                <!-- Level Two-->
                <ul>
                    <li><a href="{{ url('showpretest', []) }}"><i class="zmdi zmdi-dot-circle-alt"></i> Pretest</a></li>
                    <li><a href="{{ url('showpost', []) }}"><i class="zmdi zmdi-dot-circle-alt"></i> Posttest</a></li>
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
            <div class="col-sm">
                <h4 class="page-title">Nilai Pretest</h4>
                <ol class="breadcrumb">
               
                </ol>
            </div>
            <div class="col-sm-3">
                    <div class="btn-group float-sm-right">
                        <button type="button" class="btn btn-light waves-effect waves-light">{{date('d-m-Y')}}</button>
                      
                    </div>
                </div>
        </div>
    <!-- End Breadcrumb-->
      
       
        <div class="row">
          <div class="col-lg-12">
              <div class="card">
                <div class="card-header text-uppercase">
                  Skor Pretest
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-bordered">
                      <thead>
                          <tr>
                              <th>Peringkat</th>
                              <th>Nama Lengkap</th>
                              <th>Nomor Induk Radiologi</th>
                              <th>Nomor Handphone</th>
                              <th>Jenis Kelamin</th>
                              <th>Skor</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1 ?>
                        @foreach ($ranking as $ranking)
                    
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$ranking->name}}</td>
                            <td>{{$ranking->nir}}</td>
                            <td>{{$ranking->no_hp}}</td>
                            <td>{{$ranking->jk}}</td>
                            <td>{{$ranking->nilai}}</td>
                        </tr>
                      
                             
                        @endforeach 
                      </tbody>
                      {{-- <tfoot>
                          <tr>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
                          </tr>
                      </tfoot> --}}
                    </table>
                </div>
                </div>
              </div>
            </div>
        </div>
           
       
<!--start overlay-->
	    <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div>
  
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2021 zhafrancode
        </div>
      </div>
    </footer>
	<!--End footer-->

   
  </div><!--End wrapper-->


    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('assets/js/jquery.min.js', []) }}"></script>
    <script src="{{ url('assets/js/popper.min.js', []) }}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js', []) }}"></script>


    <script src="assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>
    <!-- simplebar js -->
    <script src="{{ url('assets/plugins/simplebar/js/simplebar.js', []) }}"></script>
    <!-- horizontal-menu js -->
    <script src="{{ url('assets/js/horizontal-menu.js', []) }}"></script>
    
    <!-- Custom scripts -->
    <script src="{{ url('assets/js/app-script.js', []) }}"></script>

    <!--Form Wizard-->
    <script src="{{ url('assets/plugins/jquery.steps/js/jquery.steps.min.js', []) }}"></script>
    <script src="{{ url('assets/plugins/jquery-validation/js/jquery.validate.min.js', []) }}"></script>
    <!--wizard initialization-->
    <script src="{{ url('assets/plugins/jquery.steps/js/jquery.wizard-init.js', []) }}"></script>

    <script>
      $(document).ready(function() {
       //Default data table
        $('#default-datatable').DataTable();
 
 
        var table = $('#example').DataTable( {
         lengthChange: false,
         buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
       } );
  
      table.buttons().container()
         .appendTo( '#example_wrapper .col-md-6:eq(0)' );
       
       } );
 
     </script>
     <script>
        jQuery(document).on('show.bs.modal','#modal-animation-1', function (e) {
          var id = jQuery(e.relatedTarget).data('id');        
        
          jQuery(e.currentTarget).find('[name="id"]').val(id);        
        
        })
    </script>
</body>
</html>

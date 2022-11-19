<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>AP PARI :: Reset Password</title>
  <link rel="icon" href="logo-pari.png" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
            @if(session()->has('alert-success'))
     
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <div class="alert-icon contrast-alert">
                <i class="fa fa-check"></i>
                </div>
                <div class="alert-message">
                  <span><strong>Success!</strong>  {{ session()->get('alert-success') }}</span>
                </div>
            </div>
            @elseif(session()->has('alert-gagal'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <div class="alert-icon contrast-alert">
                <i class="fa fa-check"></i>
                </div>
                <div class="alert-message">
                  <span><strong>Gagal!</strong>  {{ session()->get('alert-gagal') }}</span>
                </div>
            </div>
            @endif
		 <div class="card-content p-2">
		  <div class="card-title text-uppercase pb-2">Reset Password</div>
		    <p class="pb-2">Masukan Email terdaftar dan Nomor Induk Radiologi yang Terdaftar.</p>
		    <form action="{{ url('resetpassword', []) }}" method="POST">
                @csrf
			  <div class="form-group">
			  <label for="exampleInputEmailAddress" class="">Email Address</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="exampleInputEmailAddress" name="email" class="form-control input-shadow" placeholder="Email Address">
				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>
			   </div>
			  </div>

			  <div class="form-group">
			  <label for="exampleInputEmailAddress" class="">Nomor Induk Radiologi</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="exampleInputEmailAddress" name="nir" class="form-control input-shadow" placeholder="Nomor Induk radiologi">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			 
			  <button type="submit" class="btn btn-warning btn-block mt-3">Reset Password</button>
			 </form>
		   </div>
		  </div>
		   <div class="card-footer text-center py-3">
		    <p class="text-dark mb-0">Return to the <a href="{{ url('login', []) }}"> Sign In</a></p>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- horizontal-menu js -->
  <script src="assets/js/horizontal-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
	
</body>
</html>

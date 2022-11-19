<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Form Login PARI</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <style>
      form i {
                /* margin-left: 30px; */
                cursor: pointer;
            }
  </style>
</head>

<body>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

	   <div class="card-authentication2 mx-auto my-5">
	    <div class="card-group">
	    	<div class="card mb-0">
               
	    	   <div class="bg-signin2"></div>
               
	    		<div class="card-img-overlay rounded-left my-5">
                 
                 {{-- <h2 class="text-white">Webinar</h2>
                 <h1 class="text-white">Pari Kalbar</h1>
                 <p class="card-text text-white pt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> --}}
             </div>
	    	</div>

	    	<div class="card mb-0 ">
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
	    			<div class="card-content p-3">
	    				<div class="text-center">
					 		<img src="logo-pari.png" alt="logo icon" width="100">
					 	</div>
					 <div class="card-title text-uppercase text-center py-3">Halaman Masuk</div>
					   <form method="POST" action="{{ route('login') }}">
                        @csrf
						  <div class="form-group">
                            <div class="position-relative has-icon-left">
                                <label for="exampleInputUsername" class="sr-only">Username</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Nomor Induk Radiologi">
                                    <div class="form-control-position">
                                        <i class="icon-user"></i>
                                    </div>
                            </div>
                                @error('email')
                                    <span class="alert" role="alert">
                                        <strong>Username dan Password Salah..!!!</strong>
                                    </span>
                                @enderror
						  </div>
						  <div class="form-group">
                            <div class="position-relative has-icon-left">
                                <label for="exampleInputPassword" class="sr-only">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                <div class="form-control-position">
                                    <i class="fa fa-eye-slash" id="togglePassword"></i>
                                </div>
                                
                            </div>
                                @error('password')
                                    <span class="alert text-center" role="alert">
                                        <strong>Salah Memasukan Password</strong>
                                    </span>
                                @enderror
						  </div>
						  <div class="form-row mr-0 ml-0">
						  <div class="form-group col-6">
							  <div class="icheck-material-primary">
				               <input type="checkbox" id="user-checkbox" checked="" />
				               <label for="user-checkbox">Remember me</label>
							 </div>
							</div>
							<div class="form-group col-6 text-right">
							 <a href="{{ url('reset', []) }}">Lupa Password</a>
							</div>
						</div>
						<button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Masuk</button>
						 <div class="text-center pt-3">
						

						<hr>
						<p class="text-dark">Belum Mempunyai akun ? <a href="register"> Daftar disini</a></p>
						</div>
					</form>
				 </div>
				</div>
	    	</div>
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
  <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye / eye slash icon
        this.classList.toggle('bi-eye');
});
  </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Form Pendaftaran</title>
  <!--favicon-->
  <link rel="icon" href="logo-pari.png" type="image/x-icon"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>

<body>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

	   <div class="card-authentication2 mx-auto my-3">
	    <div class="card-group">
	    	<div class="card mb-0">
                <div class="bg-signup2"></div>
                    <div class="card-img-overlay rounded-left my-5">
                        <div class="text-center">
                            <img src="logo-pari1.png" alt="logo icon" width="200">
                        </div>
                    {{-- <h2 class="text-white">Webinar</h2>
                    <h1 class="text-white">Radiologi PARI PENGDA KALBAR</h1>
                    <p class="card-text text-white pt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> --}}
                </div>
	    	</div>

	    	<div class="card mb-0">
	    		<div class="card-body">
	    			<div class="card-content p-3">
	    				
					 <div class="card-title text-uppercase text-center py-3">Form Pendaftaran</div>
					    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="position-relative has-icon-left">
                                    <label for="exampleInputName" class="sr-only">Nama Lengkap</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                                    <div class="form-control-position">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                                @error('name')
                                    <span class="alert" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="position-relative has-icon-left">
                                    <label for="exampleInputEmailId" class="sr-only">Alamat Email</label>
                                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Alamat email">
                                    
                                    <div class="form-control-position">
                                        <i class="icon-envelope-open"></i>
                                    </div>
                                </div>
                                @error('email')
                                    <span class="alert" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="position-relative has-icon-left">
                                    <label for="exampleInputEmailId" class="sr-only">Nomor Induk Radiologi</label>
                                    <input type="text" id="nir" name="nir" class="form-control" placeholder="Nomor Induk Radiologi" required>
                                    {{-- <input type="text" id="status" name="status" class="form-control" value="1" placeholder="Nomor Induk Radiologi" hidden> --}}
                                    <div class="form-control-position">
                                        <i class="fa fa-keyboard-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="position-relative has-icon-left">
                                    {{-- <label for="exampleInputEmailId" class="sr-only">Nomor Induk Radiologi</label> --}}
                                    <select name="jk" id="jk" class="form-control" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="L">Laki - Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    <div class="form-control-position">
                                        <i class="fa fa-intersex"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="position-relative has-icon-left">
                                    <label for="exampleInputEmailId" class="sr-only">No Handphone / WA Yang dapat dihubungi</label>
                                    <input type="text" class="form-control" name="no_hp"  id="no_hp" placeholder="No Handphone / WA yang dapat dihubungi " required>
                                    <div class="form-control-position">
                                        <i class="icon-phone"></i>
                                    </div>
                                </div>
                            </div>
                         
                           
                            <div class="form-group">
                                <div class="position-relative has-icon-left">
                                    <label for="exampleInputPassword" class="sr-only">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                    <div class="form-control-position">
                                        <i class="fa fa-eye-slash" style="cursor: pointer;" id="togglePassword"></i>
                                    </div>
                                </div>
                                @error('password')
                                    <span class="alert" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="position-relative has-icon-left">
                                    <label for="exampleInputRetryPassword" class="sr-only">Retry Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password">
                                    <div class="form-control-position">
                                        <i class="fa fa-eye-slash" style="cursor: pointer;" id="togglePassword1"></i>
                                    </div>
                                </div>
                            </div>
						  <div class="form-group">
						   <div class="icheck-material-primary">
			                <input type="checkbox" id="user-checkbox" checked="" />
			                <label for="user-checkbox">Saya Menyetujui</label>
						  </div>
						 </div>
						 <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Daftar</button>
						 <div class="text-center pt-3">
						 
						 <hr>

						 <p class="text-dark">Sudah Mempunyai User ? <a href="{{ url('login', []) }}"> Masuk disini</a></p>
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
<script>
    const togglePassword1 = document.querySelector('#togglePassword1');
    const password_confirm = document.querySelector('#password-confirm');

    togglePassword1.addEventListener('click', function (e) {
    const type1 = password_confirm.getAttribute('type') === 'password' ? 'text' : 'password';
    password_confirm.setAttribute('type', type1);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
    });
</script>
</body>
</html>

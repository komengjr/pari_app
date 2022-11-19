<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Selamat Datang di Aplikasi Pengda PARI KALBAR</title>
  <!--favicon-->
  <link rel="icon" href="logo-pari.png" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Horizontal menu CSS-->
  <link href="assets/css/horizontal-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet"> 
</head>

<body style="background-color: rgb(188, 197, 197)">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

    <div class="container">
        <nav class="navbar navbar-light bg-white">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="logo-pari.png" alt="" width="50">
              </a>
              <ul class="nav justify-content-end">
               
                <li class="nav-item">
                  <a href="{{ url('login', []) }}" class="nav-link btn-success"><i class="fa fa-sign-in"></i> Login</a>
                </li>
              </ul>
            </div>
            
          </nav>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center coming-soon">
                        <h2 class="text-primary" style="font-family: 'Dancing Script', cursive;">Bersama-Sejahtera-Mendunia</h2>
                        <h6 class="text-dark text-uppercase">Lets Join and work with us</h6>
                        <div class="text-center">
                            <img src="{{ url('isrrt.jpg', []) }}" alt="logo icon" width="150">
                            <img src="{{ url('pari-1.png', []) }}" alt="logo icon" width="100">
                            <img src="{{ url('logo-pari.png', []) }}" alt="logo icon" width="100">
                        </div>
                        <!--subscribe form-->
                        {{-- <form class="form-inline justify-content-center py-4">
                           <div class="input-group">
                            <input type="text" class="form-control bg-white" placeholder="Enter your email....">
                            <div class="input-group-append">
                              <button class="btn btn-primary" type="button">Subscribe</button>
                            </div>
                          </div>
                         </form> --}}
                         <!--end subscribe form-->
                        <div class="mt-4">
                            @auth
                            <a href="{{ url('home', []) }}" class="btn btn-dark btn-round m-1">Home </a>
                            @else
                            <a href="{{ url('register', []) }}" class="btn bg-success btn-round m-1">Registrasi Akun </a>
                            {{-- <a href="{{ url('login', []) }}" class="btn btn-info btn-round m-1">Login </a> --}}
                            <a href="#" class="btn btn-warning btn-round m-1" data-toggle="modal" data-target="#infomodal">Tata Cara </a>
                            @endauth

                          


                        </div>
                         
                        <div class="mt-4">
                            <p class="">Copyright © 2021 PARI KALBAR | All rights reserved.</p>
                        </div>
                           <hr class="w-50 border-light">
                         <div class="mt-2">
                            {{-- <a href="javascript:void()" class=" waves-effect waves-light m-1"><img src="isrrt.jpg" alt="" width="100"></a>
                            <a href="javascript:void()" class=" waves-effect waves-light m-1"><img src="logo-pari.png" alt="" width="50"></a>
                            <a href="javascript:void()" class=" waves-effect waves-light m-1"><img src="pari-1.png" alt="" width="50"></a> --}}
                            {{-- <a href="javascript:void()" class="btn-social btn-google-plus btn-social-circle waves-effect waves-light m-1"><i class="fa fa-google-plus"></i></a>
                            <a href="javascript:void()" class="btn-social btn-behance btn-social-circle waves-effect waves-light m-1"><i class="fa fa-behance"></i></a>
                            <a href="javascript:void()" class="btn-social btn-dribbble btn-social-circle waves-effect waves-light m-1"><i class="fa fa-dribbble"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		
 </div><!--wrapper-->
 <div class="modal fade" id="infomodal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-info">
        <div class="modal-header bg-info">
          <h5 class="modal-title text-white">Tata Cara Menggunakan Aplikasi PARI KALBAR</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <div id="accordion1">
                    <div class="card mb-2">
                      <div class="card-header">
                          <button class="btn btn-link shadow-none collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                            Langkah Pertama
                          </button>
                      </div>
      
                      <div id="collapse-1" class="collapse" data-parent="#accordion1">
                          <div class="row">
                                <div class="card-body">
                                <div class="card-title text-center">Melakukan Registrasi Akun dan pastikan data yang di masukan dengan benar</div>
                                <img style="height: auto; widows: auto;max-width: 100%;" src="tata-cara/1.png" alt="">
                                </div>
                            </div>
                          <div class="row">
                                <div class="card-body">
                                <div class="card-title text-center">Masuk Dengan Username dan Password yang telah dibuat</div>
                                <img style="height: auto; widows: auto;max-width: 100%;" src="tata-cara/2.png" alt="">
                                </div>
                            </div>
                      </div>
                    </div>
                    <div class="card mb-2">
                      <div class="card-header">
                          <button class="btn btn-link shadow-none collapsed" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            Langkah Kedua
                          </button>
                      </div>
                      <div id="collapse-2" class="collapse" data-parent="#accordion1">
                        <div class="row">
                            <div class="card-body">
                            <div class="card-title text-center">Klik Daftar</div>
                            <img style="height: auto; widows: auto;max-width: 100%;" src="tata-cara/3.png" alt="">
                            <img style="height: auto; widows: auto;max-width: 100%;" src="tata-cara/4.png" alt="">
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                          <button class="btn btn-link shadow-none collapsed" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            Langkah Ketiga
                          </button>
                      </div>
                      <div id="collapse-3" class="collapse" data-parent="#accordion1">
                        <div class="row">
                            <div class="card-body">
                            <div class="card-title text-center">Konfirmasi Pembayaran</div>
                            <img style="height: auto; widows: auto;max-width: 100%;" src="tata-cara/5.png" alt="">
                            <img style="height: auto; widows: auto;max-width: 100%;" src="tata-cara/6.png" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="card-body">
                            <div class="card-title text-center">Pendaftaran Seminar Telah berhasil</div>
                            <img style="height: auto; widows: auto;max-width: 100%;" src="tata-cara/7.png" alt="">
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
          {{-- <button type="button" class="btn btn-info"><i class="fa fa-check-square-o"></i> Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>

  
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- horizontal-menu js -->
  <script src="assets/js/horizontal-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	
</body>
</html>

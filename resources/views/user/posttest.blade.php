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
			
            
        </ul>
    </nav>
    <!-- end horizontal Menu -->

<div class="clearfix"></div>
  
<div class="content-wrapper">
    <div class="container-fluid">
     <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm">
                <h4 class="page-title">Form Post Test</h4>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
                <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Post Test</li>
                </ol>
            </div>
            <div class="col-sm-3">
                    <div class="btn-group float-sm-right">
                        <button type="button" class="btn btn-light waves-effect waves-light">{{date('d-m-Y')}}</button>
                      
                    </div>
                </div>
        </div>
    <!-- End Breadcrumb-->
        <?php
            $cek_nilai = DB::table('nilai_posttest')
            ->select('nilai_posttest.*')
            ->where('email',auth::user()->email)
            ->where('kode_ujian',$soal[0]->kode_ujian)
            ->get();
        ?>    

        @if ( $cek_nilai->isempty())
            
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-uppercase">
                      Pretest Webinar Radiologi
                    </div>
                    <div class="card-body">
                        <form id="wizard-validation-form" action="{{ url('simpandataposttest', []) }}" method="POST">
                          @csrf
                            <div>
                                <h3>Panduan Test</h3>
                                <section>
                                    <div class="form-group">
                                        <label for="userName2">1. Sebelum Mengerjakan Baca Panduan Terlebih Dahulu </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="password2">2. Ketika Sudah Klik Selanjutnya Waktu akan Berjalan</label>
                                    </div>
                                    <div class="form-group">*
                                        <input id="acceptTerms-2" name="acceptTerms2" type="checkbox" class="required">
                                            <label for="acceptTerms-2">Klik disini Untuk dapat melanjutkan.</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-12 control-label">(*) wajib untung dicentang</label>
                                    </div>
                                </section>
                                <?php $no = 1; ?>
                                @foreach ($soal as $soal)
                                    
                                <h3>{{$no++}}</h3>
                                <section >
                                    <div class="form-group">
                                        <h4 style="text-align: justify;"><?php echo $soal->soal ?></h4>
                                      <input type="text" name="soal{{$soal->id}}" id="" value="{{$soal->id}}" hidden>
                                      <input type="text" name="kode_ujian" id="" value="{{$soal->kode_ujian}}" hidden>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <div class="icheck-material-primary">
                                            <input type="radio" id="primary1{{$no}}" name="jawaban{{$soal->id}}" value="a"/>
                                            <label for="primary1{{$no}}"><p>A. <?php echo $soal->a ?></p></label>
                                          </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <div class="icheck-material-primary">
                                            <input type="radio" id="primary2{{$no}}" name="jawaban{{$soal->id}}" value="b"/>
                                            <label for="primary2{{$no}}">B. <?php echo $soal->b ?></label>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="icheck-material-primary">
                                            <input type="radio" id="primary3{{$no}}" name="jawaban{{$soal->id}}" value="c"/>
                                            <label for="primary3{{$no}}">C. <?php echo $soal->c ?></label>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="icheck-material-primary">
                                            <input type="radio" id="primary4{{$no}}" name="jawaban{{$soal->id}}" value="d"/>
                                            <label for="primary4{{$no}}">D. <?php echo $soal->d ?></label>
                                          </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <div class="icheck-material-primary">
                                            <input type="radio" id="primary5{{$no}}" name="jawaban{{$soal->id}}" value="e"/>
                                            <label for="primary5{{$no}}">E. <?php echo $soal->e ?></label>
                                          </div>
                                    </div> --}}
                                </section>
                                @endforeach
                                <h3>Selesai & Simpan</h3>
                                <section>
                                    <div class="form-group">
                                        <label for="password2">Dapat Mengecek Kembali Jawaban Jika Merasa Ragu</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                          
                                        
                                            <input id="acceptTerms-2" class="bg-danger" name="acceptTerms2" type="checkbox" class="required">
                                            <label for="acceptTerms-2">Saya Yakin Telah menjawab semuanya dan centang untuk yakin.</label>
                                        
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                    </div>
                                </section>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @else
       
        <div class="row">
          <div class="col-lg-12">
              <div class="card">
                <div class="card-header text-uppercase">
                  Skor Pretest
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="default-datatable" class="table table-bordered">
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
                        
                        @if ($ranking->email == auth::user()->email)
                        <tr class="bg-success">
                            <td>{{$no++}}</td>
                            <td>{{$ranking->name}}</td>
                            <td>{{$ranking->nir}}</td>
                            <td>{{$ranking->no_hp}}</td>
                            <td>{{$ranking->jk}}</td>
                            <td>{{$ranking->nilai}}</td>
                        </tr>
                        @else
                        <tr>
                            <td>{{$no++}}</td>
                            <td>***************</td>
                            <td>***************</td>
                            <td>***************</td>
                            <td>***************</td>
                            <td>{{$ranking->nilai}}</td>
                        </tr>
                        @endif
                         
                             
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
           
        @endif
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
</body>
</html>

<!DOCTYPE html>a
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>{{Auth::user()->name}} :: PARI KALBAR</title>
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

            @if (auth::user()->id == 6)
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
            @else

            @endif


        </ul>
    </nav>
    <!-- end horizontal Menu -->

<div class="clearfix"></div>

    @if (Auth::user()->status == 0)
        @include('admin.view')
    @else
        @include('user.view')
    @endif

    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright ?? 2021 zhafrancode
        </div>
      </div>
    </footer>
	<!--End footer-->
	<div class="modal fade" id="modal-animation-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content animated flipInX">
            <div class="modal-header">
              <h5 class="modal-title">Yakin Untuk Mendaftar ?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ url('daftarwebinar', []) }}" method="post">
            <div class="modal-body">
              <div class="text-center">
                  <img src="{{ url('webinar/1.jpeg', []) }}" alt="logo icon" width="300">
              </div>

                @csrf
              <input type="text" name="id"  id="id" >

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
              <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Daftar</button>
            </div>
          </form>
          </div>
        </div>
    </div>

  </div><!--End wrapper-->


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
    <script src="assets/js/app-script.js"></script>
    <script src="{{ url('assets/plugins/select2/js/select2.min.js', []) }}"></script>

    <script>
      $(document).ready(function() {
          $('.single-select').select2();

          $('.multiple-select').select2();

      //multiselect start

        });

    </script>
    <script>
      $(document).ready(function() {
       //Default data table
        $('#default-datatable').DataTable();


        var table = $('#example1').DataTable( {
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
    <script>
        jQuery(document).on('show.bs.modal','#formemodal', function (e) {
          var id = jQuery(e.relatedTarget).data('id');

          jQuery(e.currentTarget).find('[name="id-webinar"]').val(id);

        })
    </script>

    <script>
      $(document).ready(function(){
			$(document).on('click', '#buktibayar2', function(e){
				e.preventDefault();
				var url = $(this).data('url');
				$('#bukti-pembayaran').html("asdas");
				$.ajax({
					url: url,
					type: 'GET',
					dataType: 'html'
				})
				.done(function(data){
					$('#bukti-pembayaran') .html(data);
				})
				.fail(function(){
					$('#bukti-pembayaran').html('<i class="fa fa-info-sign"></i> Something went wrong, Please try again...');
				});
			});
		});

    </script>
    <script>
      $(document).ready(function(){
			$(document).on('click', '#info_jadwal', function(e){
				e.preventDefault();
				var url = $(this).data('url');
				$('#jadwalpeserta').html("asdas");
				$.ajax({
					url: url,
					type: 'GET',
					dataType: 'html'
				})
				.done(function(data){
					$('#jadwalpeserta') .html(data);
				})
				.fail(function(){
					$('#jadwalpeserta').html('<i class="fa fa-info-sign"></i> Something went wrong, Please try again...');
				});
			});
		});

    </script>
    <script>
      $(document).ready(function(){
			$(document).on('click', '#daftar_webinar', function(e){
				e.preventDefault();
				var url = $(this).data('url');
				$('#jadwalpeserta').html("asdas");
				$.ajax({
					url: url,
					type: 'GET',
					dataType: 'html'
				})
				.done(function(data){
					$('#formpendaftaranwebinar') .html(data);
				})
				.fail(function(){
					$('#formpendaftaranwebinar').html('<i class="fa fa-info-sign"></i> Something went wrong, Please try again...');
				});
			});
		});

    </script>
     <script>
        $(document).ready(function(){
        $(document).on('click', '#daftar_peserta_webinar', function(e){
            var data = $('#form-pengajuan').serialize();
                e.preventDefault();
                var url = $(this).data('url');
                $('#jadwalpeserta').html("<br><br><br><img src='cdn0/pu.gif'  style='display: block; margin: auto;'>");
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    dataType: 'html'
                })
                .done(function(data){
                    $('#daftarpesertawebinar') .html(data);
                })
                .fail(function(){
                    $('#daftarpesertawebinar').html('<i class="fa fa-info-sign"></i> Something went wrong, Please try again...');
                });
            });
        });


      </script>
</body>
</html>

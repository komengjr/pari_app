<!DOCTYPE html>
<html lang="en">
<head>

  <title>Invoice</title>
  <!--favicon-->
  <link rel="icon" href="{{ url('logo-pari.png', []) }}" type="image/x-icon"/>
  <!-- simplebar CSS-->
  <link href="{{ url('assets/plugins/simplebar/css/simplebar.css', []) }}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ url('assets/css/bootstrap.min.css', []) }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ url('assets/css/animate.css" rel="stylesheet', []) }}" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ url('assets/css/icons.css" rel="stylesheet', []) }}" type="text/css"/>
  <!-- Horizontal menu CSS-->
  <link href="{{ url('assets/css/horizontal-menu.css', []) }}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ url('assets/css/app-style.css', []) }}" rel="stylesheet"/>



</head>

<body>



  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->

    <!-- End Breadcrumb-->
      <div class="card">
          <div class="card-body">
                  <!-- Content Header (Page header) -->


                  <!-- Main content -->
                  <section class="invoice">
                    <!-- title row -->
                    <div class="row mt-3">
                      <div class="row ml-2">
                        <div class="col-lg-2">
                            <img src="https://paripengdakalbar.com/logo-pari.png" alt="" width="120">
                        </div>
                        <div class="col-lg-10">
                            <h4 style="text-align: center; "> PERHIMPUNAN RADIOGRAFER INDONESIA ( PARI ) <br> [<span style="font-style: italic"> INDONESIA SOCIETY OF RADIOGRAPHERS </span>]
                                 <br>PENGURUS DAERAH KALIMANTAN BARAT
                                </h4> <P style="text-align: center; ">Sekertariat : Gedung Cathlab Rumah Sakit Umum Daerah Dr. Soedarso Pontianak <br> Jl. dr. Soedarso No 1 Kota Pontianak, Kalimantan Barat 78124</P>
                        </div>

                      </div>
					  <div class="col-lg-5">
					   <h5 class="float-sm-right">Date: 2/10/2022</h5>
					  </div>
                    </div>

                    <hr>
                    <div class="row invoice-info">
                      <div class="col-sm-4 invoice-col">
                        Webinar
                        <address>
                         <strong style="text-align: justify;">Kategori Nilai Kritis dengan Modalitas CT-Scan ( Head-CT ) Serta Implementasi Pelayanan Radiologi Berdasarkan Standar Akreditas PP 4</strong><br>
                        <br>18 Desember 2022
                        </address>
                      </div><!-- /.col -->
                      <div class="col-sm-4 invoice-col">

                        <address>
                          <strong></strong><br>
                          <br>
                         <br>
                          <br>

                        </address>
                      </div><!-- /.col -->
                      <div class="col-sm-4 invoice-col">
                        <b>Invoice #{{$no_invoice}}</b><br>
                        <br>

                        <b>Tanggal Pembayaran:</b> 2/22/2022<br>
                        <b>Account:</b> {{$email}}
                      </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                      <div class="col-12 table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama Peserta</th>
                              <th>Nomor Induk Radiologi</th>
                              <th>Email / No Hp</th>
                              <th>Biaya Pendaftaran</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>{{$nama}}</td>
                              <td>{{$nir}}</td>
                              <td>{{$email}} / {{$no_hp}}</td>
                              <td>Rp 150.000,-</td>
                            </tr>

                          </tbody>
                        </table>
                      </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="row">
                      <!-- accepted payments column -->
                      <div class="col-lg-6 payment-icons">
                        <p class="lead">Support By :</p>
                        <img src="{{ url('isrrt.png', []) }}" alt="" width="50">
                        <img src="{{ url('isrrt.jpg', []) }}" alt="" width="50">
                        <img src="{{ url('logo-pari.png', []) }}" alt="" width="50">
                        <img src="{{ url('pari-1.png', []) }}" alt="" width="50">
                        <p class="bg-light p-2 mt-3 rounded">
                          Bukti ini Jangan sampai hilang , karena bukti syarat untuk mengikuti webinar selanjutnya..
                        </p>
                      </div><!-- /.col -->
                      <div class="col-lg-6">
                        {{-- <p class="lead">Amount Due 2/22/2014</p> --}}
                        <div class="table-responsive">
                          <table class="table-borderless" >
                            <tbody>
                                <tr></tr>
							<tr>
                              <th style="width:50%">Terbilang :</th>
                              <td>Seratus Lima Puluh Ribu Rupiah</td>
                            </tr>
							<tr>
                              <th style="width:50%"> </th>
                              <td></td>
                            </tr>
                            {{-- <tr>
                              <th>Tax (9.3%)</th>
                              <td>$10.34</td>
                            </tr>
                            <tr>
                              <th>Shipping:</th>
                              <td>$5.80</td>
                            </tr>
                            <tr>
                              <th>Total:</th>
                              <td>$265.24</td>
                            </tr> --}}
                            <br><br>
                            <tr class="mt-3">
                                <th></th>
                                <td>Pontianak, 28 Agustus 2022 <br>Ketua Panitia</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><img src="{{ url('ttd.png', []) }}" alt="" width="100"></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><strong> Nama Ketua </strong></td>
                            </tr>
                          </tbody>
						  </table>

                        </div>
                      </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <hr>

                  </section><!-- /.content -->
          </div>
      </div>
    <!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
    </div>
    <!-- End container-fluid-->

   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->




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

</body>
</html>

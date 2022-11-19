
    <link href="{{ url('assets/plugins/select2/css/select2.min.css', []) }}" rel="stylesheet"/>
    <div class="content-wrapper">
    <div class="container-fluid">
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
      @endif

      <!--Start Dashboard Content-->

     {{-- <div class="row mt-3">
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-deepblue">
           <div class="card-body">
              <h5 class="text-white mb-0">0 <span class="float-right"><i class="fa fa-user-o"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:0%"></div>
                </div>
              <p class="mb-0 text-white small-font">Total Account <span class="float-right"><a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a> </span></p>
            </div>
         </div>
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-orange">
           <div class="card-body">
              <h5 class="text-white mb-0">0 <span class="float-right"><i class="fa fa-user"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <p class="mb-0 text-white small-font">Webinar <span class="float-right"><a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a></span></p>
            </div>
         </div>
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-ohhappiness">
            <div class="card-body">
              <h5 class="text-white mb-0">0 <span class="float-right"><i class="fa fa-eye"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <p class="mb-0 text-white small-font"> <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
         </div>
       </div>
       <div class="col-12 col-lg-6 col-xl-3">
         <div class="card gradient-ibiza">
            <div class="card-body">
              <h5 class="text-white mb-0">0 <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <p class="mb-0 text-white small-font">- <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
         </div>
       </div>
     </div><!--End Row--> --}}

        <div class="row">

            <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header border-0">Aktivasi Pembayaran
                <div class="card-action">
                    <div class="dropdown">
                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                    <i class="icon-options"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="javascript:void();" data-toggle="modal" data-target="#kirimpesanbroadcastbayar">Kirim Pesan Brodcast</a>
                    {{-- <a class="dropdown-item" href="javascript:void();">Another action</a>
                    <a class="dropdown-item" href="javascript:void();">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void();">Separated link</a> --}}
                    </div>
                    </div>
                    </div>
                </div>
                    <div class="table-responsive">

                        <table class="table align-items-center table-flush">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Photo</th>
                                    <th>Nama Peserta</th>
                                    <th>Nomor Induk Radiologi</th>
                                    <th>Status</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                    @foreach ($peserta_webinar as $data1)
                                    @if ($data1->status == 0)
                                    <tr>
                                    <td>{{$no++}}</td>
                                        <td>
                                            <img alt="Image placeholder" src="https://via.placeholder.com/110x110" class="product-img">
                                        </td>
                                        <td>{{$data1->name}}</td>
                                        <td>{{$data1->nir}}</td>
                                        <td>
                                            @if ($data1->bukti == "")
                                                <span class="badge-dot">
                                                    <i class="bg-danger"></i> Menunggu Pembayaran
                                                </span>
                                            @else
                                                <span class="badge-dot">
                                                    <i class="bg-warning"></i> Konfirmasi Pembayaran
                                                </span>
                                            @endif

                                        </td>

                                        <td><button class="btn btn-info" data-toggle="modal" data-target="#buktibayar1" id="buktibayar2" data-url="{{ route('buktipembayaran',['id' => $data1->id_peserta_webinar])}}"><i class="fa fa-eye"></i></button></td>
                                    </tr>
                                    @else

                                    @endif


                                    @endforeach
                            </tbody>
                        </table>

                    </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="buktibayar1">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Bukti Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body"id="bukti-pembayaran">


                </div>

            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header border-0">Data Peserta Seminar

                <div class="card-action">
                    <div class="dropdown">
                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                    <i class="icon-options"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="javascript:void();" data-toggle="modal" data-target="#kirimemail"><i class="fa fa-envelope"></i> Kirim Pesan Mail</a>
                    {{-- <a class="dropdown-item" href="javascript:void();">Another action</a>
                    <a class="dropdown-item" href="javascript:void();">Something else here</a> --}}
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void();" data-toggle="modal" data-target="#kirimpesanbroadcast"><i class="fa fa-envelope"></i> Kirim Pesan Broadcast</a>
                    </div>
                    </div>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="#" enctype="multipart/form-data" id="form-pengajuan">
                        @csrf
                        <div class="row">

                          <div class="col-8">

                            <select class="form-control single-select" name="judul">
                                <option>Ketik Judul Webinar</option>
                                @foreach ($webinar as $data)
                                <option value="{{$data->id_webinar}}">{{$data->nama_webinar}}</option>
                                @endforeach


                            </select>

                          </div>

                          <div class="col-4">
                            <button type="button"  class="btn btn-primary mb-3" id="daftar_peserta_webinar" data-url="{{ route('daftarpesertawebinar',[])}}">Konfirmasi</button>
                          </div>
                        </div>

                    </form>

                <div class="table-responsive" id="daftarpesertawebinar">
                        <table id="example1" class="table table-bordered">
                            <thead>
                                <tr>
                                <th>No</th>
                                    <th>Nama Peserta</th>
                                    <th>Nomor Induk Radiologi</th>
                                    <th>Email</th>
                                    <th>Jenis Kelamin</th>

                                    <th>no HP</th>
                                    <th>Bukti Pembayaran</th>
                                </tr>
                            </thead>


                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div><!--End Row-->

      <!--End Dashboard Content-->
<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->

    </div>

    <div class="modal fade" id="kirimemail">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-success">
          <div class="modal-header bg-success">
            <h5 class="modal-title text-white">Kirim Pesan Seminar</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ url('kirimpesanemail', []) }}" method="post">
              @csrf
              <div class="form-group">
                <label>Cari Alamat email</label>
                <select class="form-control single-select" name="email">
                    <option>Ketik Nama / Alamat Email</option>
                    @foreach ($peserta_webinar as $peserta)
                    <option value="{{$peserta->email}}">{{$peserta->name}} - {{$peserta->email}}</option>
                    @endforeach


                </select>
              </div>
            {{-- <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div> --}}
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Subject</label>
              <input type="text" name="subject" class="form-control" id="exampleFormControlInput1" placeholder="subject">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
              <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Kirim Pesan</button>
          </div>
        </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="kirimpesanbroadcast">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-success">
          <div class="modal-header bg-success">
            <h5 class="modal-title text-white">Kirim Pesan Broadcast</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ url('kirimpesanbroadcast', []) }}" method="post">
              @csrf
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
              </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
              <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="6"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Kirim Pesan</button>
          </div>
        </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="kirimpesanbroadcastbayar">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-success">
          <div class="modal-header bg-success">
            <h5 class="modal-title text-white">Kirim Pesan Broadcast Pembayaran</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ url('kirimpesanbroadcastbayar', []) }}" method="post">
              @csrf
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
              </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
              <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="6"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Kirim Pesan</button>
          </div>
        </form>
        </div>
      </div>
    </div>

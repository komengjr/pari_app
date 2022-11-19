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

      <?php
      $bill = DB::table('peserta_webinar')
            ->select('peserta_webinar.*')
            ->where('email',auth::user()->email)
            ->where('status',0)
            ->where('bukti','=',"")
            ->get();
            // dd($bill);
      ?>

      @if ($bill->isempty())

      @else
      <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <div class="alert-icon contrast-alert">
          <i class="fa fa-check"></i>
          </div>
          <div class="alert-message">
            <span><strong>Info!</strong> Ada pembayaran yang belum selesai , Segera Untuk Melakukan Pembayaran
              <a href="javascript:void();" class="btn btn-dark btn-sm text-white" data-toggle="modal" data-target="#formemodal" data-id="{{$bill[0]->id_webinar}}"><i class="fa fa-check-circle-o  mr-1"></i>Konfirmasi Pembayaran</a>
            </span>
          </div>
      </div>
      @endif




      <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">{{Auth::user()->name}}</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page"></li>
        </ol>
    </div>
    <div class="col-sm-3">

    </div>
    </div>
    <!-- End Breadcrumb-->

      <div class="row">
        <div class="col-lg-4">
          <div class="card profile-card-2">
            <div class="card-img-block">
                <img class="img-fluid" src="back.png" alt="Card image cap" width="500" height="50">
            </div>
            <div class="card-body pt-5">
              @if (auth::user()->gambar == "")
              <img src="img.png" alt="profile-image" class="profile">
              @else
              <img src="{{auth::user()->gambar}}" alt="profile-image" class="profile">
              @endif

                <strong><h5 class="card-title">{{Auth::user()->name}}</h5></strong>
                <p class="card-text">Selamat Datang di Aplikasi Pengda PARI Kalimantan Barat</p>
                <div class="icon-block">
                  <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
          <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
          <a href="javascript:void();"> <i class="fa fa-google-plus bg-google-plus text-white"></i></a>
                </div>
            </div>

            <div class="card-body border-top border-light">
                {{-- <div class="media align-items-center">
                    <div>
                        <img src="assets/images/timeline/html5.svg" class="skill-img" alt="skill img">
                    </div>
                        <div class="media-body text-left ml-3">
                        <div class="progress-wrapper">
                            <p>HTML5 <span class="float-right">65%</span></p>
                            <div class="progress" style="height: 5px;">
                            <div class="progress-bar gradient-blooker" style="width:65%"></div>
                            </div>
                            </div>
                        </div>
                </div>
                  <hr>
                <div class="media align-items-center">
                  <div><img src="assets/images/timeline/bootstrap-4.svg" class="skill-img" alt="skill img"></div>
                    <div class="media-body text-left ml-3">
                      <div class="progress-wrapper">
                        <p>Bootstrap 4 <span class="float-right">50%</span></p>
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar gradient-purpink" style="width:50%"></div>
                        </div>
                        </div>
                    </div>
                </div>
                  <hr>
                <div class="media align-items-center">
                  <div><img src="assets/images/timeline/angular-icon.svg" class="skill-img" alt="skill img"></div>
                    <div class="media-body text-left ml-3">
                      <div class="progress-wrapper">
                        <p>AngularJS <span class="float-right">70%</span></p>
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar gradient-ibiza" style="width:70%"></div>
                        </div>
                        </div>
                    </div>
                </div>
                    <hr>
                <div class="media align-items-center">
                  <div><img src="assets/images/timeline/react.svg" class="skill-img" alt="skill img"></div>
                    <div class="media-body text-left ml-3">
                      <div class="progress-wrapper">
                        <p>React JS <span class="float-right">35%</span></p>
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar gradient-scooter" style="width:35%"></div>
                        </div>
                        </div>
                    </div>
                </div>
                  --}}
            </div>
        </div>

        </div>

        <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
              <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                  <li class="nav-item">
                      <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                  </li>
                  <li class="nav-item">
                      <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-info"></i> <span class="hidden-xs">Informasi</span></a>
                  </li>
                  <li class="nav-item">
                      <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                  </li>
              </ul>
              <div class="tab-content p-3">
                  <div class="tab-pane active" id="profile">
                      {{-- <h5 class="mb-3">User Profile</h5> --}}
                      <div class="row">
                          <div class="col-md-6">
                              <h6>Nama Lengkap</h6>
                              <p>
                                  {{Auth::user()->name}}.
                              </p>
                              <h6>Nomor Induk Radiologi</h6>
                              <p>
                                {{Auth::user()->nir}}
                              </p>

                          </div>
                          {{-- <div class="col-md-6">
                              <h6>Recent badges</h6>
                              <a href="javascript:void();" class="badge badge-dark badge-pill">html5</a>
                              <a href="javascript:void();" class="badge badge-dark badge-pill">react</a>
                              <a href="javascript:void();" class="badge badge-dark badge-pill">codeply</a>
                              <a href="javascript:void();" class="badge badge-dark badge-pill">angularjs</a>
                              <a href="javascript:void();" class="badge badge-dark badge-pill">css3</a>
                              <a href="javascript:void();" class="badge badge-dark badge-pill">jquery</a>
                              <a href="javascript:void();" class="badge badge-dark badge-pill">bootstrap</a>
                              <a href="javascript:void();" class="badge badge-dark badge-pill">responsive-design</a>
                              <hr>
                              <span class="badge badge-primary"><i class="fa fa-user"></i> 900 Followers</span>
                              <span class="badge badge-success"><i class="fa fa-cog"></i> 43 Forks</span>
                              <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
                          </div> --}}
                          <div class="col-md-12">
                              <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Kegiatan Terbaru</h5>
                              <div class="table-responsive">
                                {{-- <table class="table table-hover table-striped">
                                    <tbody>
                                      @foreach ($webinar as $item)
                                      <?php
                                          $webinar = DB::table('peserta_webinar')
                                                      ->select('peserta_webinar.*','users.name','users.email','users.nir')
                                                      ->join('webinar','webinar.id_webinar','=','peserta_webinar.id_webinar')
                                                      ->join('users','users.email','=','peserta_webinar.email')
                                                      ->where('peserta_webinar.email',auth::user()->email)
                                                      ->where('webinar.id_webinar', $item->id_webinar)
                                                      ->get();
                                                      // dd($webinar)
                                      ?>
                                      @if ($webinar->isEMpty())
                                      <tr>
                                          <td>
                                            <span class="float-right font-weight-bold"></span> Webinar
                                          </td>
                                          <td>
                                              <strong>{{ $item->nama_webinar}}</strong>
                                          </td>
                                          <td>
                                              <button class="btn btn-danger" data-toggle="modal" data-target="#modal-animation-1" data-id="{{$item->id_webinar}}">Daftar</button>
                                          </td>
                                      </tr>
                                      @else

                                      <tr>
                                          <td>
                                            <span class="float-right font-weight-bold"></span> Webinar :
                                          </td>
                                          <td>
                                              <strong>{{ $item->nama_webinar}}</strong>
                                          </td>
                                          <td>
                                              <button class="btn btn-warning" data-toggle="modal" data-target="#formemodal">Konfirmasi Pembayaran</button>
                                          </td>
                                      </tr>

                                      @endif


                                      @endforeach
                                    </tbody>
                                </table> --}}
                              </div>
                              <div class="row">
                                @foreach ($webinar as $item)
                                <?php
                                    $webinar = DB::table('peserta_webinar')
                                                ->select('peserta_webinar.*','users.name','users.email','users.nir',)
                                                ->join('webinar','webinar.id_webinar','=','peserta_webinar.id_webinar')
                                                ->join('users','users.email','=','peserta_webinar.email')
                                                ->where('peserta_webinar.email',auth::user()->email)
                                                ->where('webinar.id_webinar', $item->id_webinar)
                                                ->get();
                                                // dd($webinar)
                                ?>

                                <div class="col-12 col-lg-4">
                                  <div class="card">
                                  <img src="{{ url($item->gambar, []) }}" class="card-img-top" alt="Card image cap">
                                      <div class="card-body">
                                        <p class="card-title" style="text-align: justify;">{{ $item->nama_webinar}}</p>
                                        {{-- <h6>Praesent commodo cursus magna.</h6>
                                        <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                                        <hr>
                                          @if ($webinar->isEMpty())
                                            <?php

                                            $tgl = substr($item->tgl_webinar,12,4);

                                            ?>
                                            @if ($tgl >= 2022)
                                            <a href="javascript:void();" class="btn btn-info btn-sm text-white" style="float: right;" data-toggle="modal"  data-target="#daftarwebinar" id="daftar_webinar" data-url="{{ route('registerwebinar',['id' => $item->id_webinar])}}"><i class="fa fa-plus-square-o mr-1"></i>Daftar</a>
                                            @else
                                            <a href="javascript:void();" class="btn btn-danger btn-sm text-white" style="float: right;" ><i class="fa fa-ban mr-1"></i>Expierd</a>
                                            @endif

                                          @else

                                              @if ($webinar[0]->bukti == "")
                                                <a href="javascript:void();" class="btn btn-warning btn-sm text-white" data-toggle="modal" data-target="#formemodal" data-id="{{$item->id_webinar}}"><i class="fa fa-check-circle-o  mr-1"></i>Konfirmasi Pembayaran</a>
                                              @else

                                                @if ($webinar[0]->status == 1)
                                                <div class="row">
                                                <div class="col-8">
                                                  <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#infojadwal" id="info_jadwal" data-url="{{ route('datapeserta',['id' => $webinar[0]->id_peserta_webinar])}}"> Terdaftar / Lihat Informasi</button>
                                                </div>
                                                <div class="col-2">
                                                  <button class="btn btn-success" data-toggle="modal" data-target="#contactperson"><i class="fa fa-whatsapp"></i></button>
                                                </div>
                                              </div>
                                                @else
                                                <button class="btn btn-warning" disabled> Menunggu Konfirmasi</button>
                                                @endif

                                              @endif

                                          @endif
                                        </div>
                                  </div>
                                </div>
                                @endforeach

                            </div>
                          </div>
                      </div>

                      <div class="modal fade" id="formemodal">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Konfirmasi Pembayaran</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('uploadbukti', []) }}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  <div class="row" style="text-align: justify;">
                                    <div class="col-md-12">
                                      <strong>1.  Silahkan melakukan transaksi pembayaran <br> di No. Rekening : <b style="color: black">0903496332</b> <br>atas nama <b style="color: black">PARI PENGDA KALIMANTAN BARAT</b> <br>
                                    <p>Sistem Pembayaran Menggunakan BANK ( Menggunakan Kode Unik ) bukan melalui pihak ketiga seperti DANA , GOPAY, OVO , Dan Lain - lain Serta Ada Pemberitahuan Via Email</p>
                                    </strong>
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                      <strong><br>2.  Batas pembayaran 3 * 24 Jam , simpan dan upload bukti pembayaran anda di akun pendaftaram ini , Jika dalam waktu yang sudah ditentukan belum upload bukti pembayaran maka peserta dapat melakukan registrasi ulang</strong>
                                    </div>
                                    <div class="col-md-12">
                                      <strong><br>3. Pendaftaran anda akan dikonfirmasi oleh panitia kuranglebih 1x24 jam</strong>
                                    </div>
                                    <div class="col-md-12">
                                      <strong><br>4. Jika sudah terkonfirmasi, anda akan mendapatkan notifikasi di akun pendaftaran anda
                                      </strong>
                                    </div>
                                    <div class="col-md-12">
                                      <strong><br>5. Jika tidak memdapat balasan atau mengalami masalah, silahkan hubungi panitia di no WA : <br>
                                        <b style="color: black">0812-5490-3705 <a href="https://api.whatsapp.com/send?phone=081254903705&text=Hai Panitia"><i class="fa fa-massage"></i></a></b> <br>
                                        <b style="color: black">0896-9411-5575</b>
                                      </strong>
                                    </div>

                                    {{-- <div class="text-center">
                                      <img src="{{ url('tata-cara/kirim.jpeg', []) }}" alt="logo icon" width="300">
                                  </div> --}}
                                  </div>
                                  <hr>
                                   <div class="form-group">
                                     <label for="input-1">Upload Bukti Pembayaran</label>
                                     <input type="file" class="form-control" id="file" name="file" required>
                                     <input type="text" name="id-webinar" id="id-webinar" hidden>
                                   </div>

                                   <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Konfirmasi</button>
                                  </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--/row-->
                  </div>
                  <div class="tab-pane" id="messages">
                    <div class="alert alert-info alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="alert-icon">
                            <i class="icon-info"></i>
                        </div>
                        <div class="alert-message">
                            <span><strong>Info!</strong> Coming Soon.</span>
                        </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-hover table-striped">
                          <tbody>

                          </tbody>


                      </table>

                    </div>
                  </div>
                  <div class="tab-pane" id="edit">
                      <form action="{{ url('updatedata', []) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label form-control-label">Nama Lengkap</label>
                              <div class="col-lg-9">
                                  <input class="form-control" type="text" name="name" value="{{Auth::user()->name}}">
                                  <input class="form-control" type="text" value="{{Auth::user()->id}}" name="id" hidden>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label form-control-label">Nomor Induk Radiologi</label>
                              <div class="col-lg-9">
                                  <input class="form-control" name="nir" type="text" value="{{Auth::user()->nir}}">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label form-control-label">Nomor Hp aktif</label>
                              <div class="col-lg-9">
                                  <input class="form-control" name="no_hp" type="text" value="{{Auth::user()->no_hp}}">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label form-control-label">Username</label>
                              <div class="col-lg-9">
                                  <input class="form-control" name="email" type="email" value="{{Auth::user()->email}}" disabled>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label form-control-label">Change profile</label>
                              <div class="col-lg-9">
                                  <input class="form-control" type="file" name="file" id="file">
                              </div>
                          </div>


                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label form-control-label"></label>
                              <div class="col-lg-9">
                                  {{-- <input type="reset" class="btn btn-secondary" value="Cancel"> --}}
                                  <input type="submit" class="btn btn-primary" value="Ubah Data">
                              </div>
                          </div>
                      </form>
                      <form action="{{ url('ubahpassword', []) }}" method="post">
                        @csrf
                      <div class="form-group row">

                        <label class="col-lg-3 col-form-label form-control-label">Password</label>
                        <div class="col-lg-6">
                            <input class="form-control" name="password" type="text" >
                            <input class="form-control" name="id" type="text" value="{{auth::user()->id}}" hidden>
                        </div>
                        <div class="col-lg-3">
                          <input type="submit" class="btn btn-primary" value="Ubah Password">
                        </div>
                    </div>
                    </form>
                  </div>
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

  <div class="modal fade" id="infojadwal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-success">
        <div class="modal-header bg-success">
          <h5 class="modal-title text-white">Informasi Seminar</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="jadwalpeserta">
          <h1 class="text-center">Coming Soon</h1>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
          {{-- <button type="button" class="btn btn-success"><i class="fa fa-check-square-o"></i> Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="contactperson">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-success">
        <div class="modal-header bg-success">
          <h5 class="modal-title text-white">Informasi</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" >
          <br>
          <div class="">
            <table class="table" border="0">
              <tr>
                <td class="text-center"><a target="_blank" href="https://api.whatsapp.com/send?phone=6281254903705&text=Hai Panitia"><img src="wa.png" alt="" width="50"></a></td>
                <td class="text-center"><a target="_blank" href="https://api.whatsapp.com/send?phone=6285156420835&text=Hai Panitia"><i class="fa fa-whatsapp"></i></a></td>
              </tr>
            </table>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
          {{-- <button type="button" class="btn btn-success"><i class="fa fa-check-square-o"></i> Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="daftarwebinar">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Form Pendaftaran Webinar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body"id="formpendaftaranwebinar">


        </div>

    </div>
    </div>
</div>

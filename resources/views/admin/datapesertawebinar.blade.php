

<link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
<link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
<hr>
<div class="table-responsive" id="daftarpesertawebinar">
    <table id="example" class="table table-bordered">
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
        <tbody >
            <?php $no = 1 ?>
                @foreach ($peserta_webinar as $data2)
                @if ($data2->status == 1)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data2->name}}</td>
                    <td>{{$data2->nir}}</td>
                    <td>{{$data2->email}}</td>
                    @if ($data2->jk == "L")
                    <td>Laki - Laki</td>
                    @else
                    <td>Perempuan</td>
                    @endif

                    <td>{{$data2->no_hp}} <a href="https://api.whatsapp.com/send?phone={{$data2->no_hp}}" target="_blank" rel="noopener noreferrer" ><i class="fa fa-whatsapp"></i></a></td>
                    <td><button class="btn btn-info" data-toggle="modal" data-target="#buktibayar1" id="buktibayar2" data-url="{{ route('buktipembayaran',['id' => $data2->id_peserta_webinar])}}"><i class="fa fa-eye"></i></button></td>
                </tr>
                @endif
                @endforeach


        </tbody>

    </table>
</div>

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


          var table = $('#example').DataTable( {
           lengthChange: true,
           buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
         } );

        table.buttons().container()
           .appendTo( '#example_wrapper .col-md-6:eq(0)' );

         } );

      </script>

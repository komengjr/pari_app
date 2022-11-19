
    <form action="{{ url('inputpeserta', []) }}" method="post">
        @csrf
        <div class="text-center">
            @if ($data_bukti[0]->bukti == "")
                Belum Melakukan Pembayaran
            @else
            <img src="{{$data_bukti[0]->bukti}}" alt="" width="200">
           <hr>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">ID Peserta Webinar</label>
                <input type="text" class="form-control" name="id_peserta_webinar" value="{{$data_bukti[0]->id_peserta_webinar}}" id="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
                @if ($data_bukti[0]->status == 1)

                @else
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
                    <a href="{{ url('hapusdatapeserta', ['id' => $data_bukti[0]->id]) }}"  class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Konfirmasi</button>
                </div>
                @endif

            @endif


        </div>
    </form>



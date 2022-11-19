<form action="{{ url('daftarwebinar', []) }}" method="post">
    <div class="modal-body">
      <div class="text-center">
          <img src="{{ url($daftar[0]->gambar, []) }}" alt="logo icon" width="300">
      </div>

        @csrf
      <input type="text" name="id"  id="id" value="{{$id}}" hidden>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
      <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Daftar</button>
    </div>
  </form>

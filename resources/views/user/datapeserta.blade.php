<div class="modal-body">
    <p>Selamat anda telah terdaftar sebagai peserta. Nomor registrasi kepesertaan anda adalah : <strong style="color: black">{{$data_peserta[0]->no_registrasi}} </strong></p>
    <p>Gunakan nomor registrasi kepesertaan anda saat webinar berlangsung dengan format :</p>
    <strong style="color: black">{{$data_peserta[0]->no_registrasi}}_WKB_{{auth::user()->name}}</strong>
    
</div>
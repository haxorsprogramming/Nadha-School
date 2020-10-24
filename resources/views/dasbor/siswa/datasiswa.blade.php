<div class="card card-primary" id="divDataSiswa">
    <div class="card-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Basic</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Akun</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Keuangan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="firebase-tab" data-toggle="tab" href="#firebase" role="tab" aria-controls="firebase" aria-selected="false">Firebase Setting</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="other" aria-selected="false">Lainnya</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="form-group">
                    <label>Nama Restoran</label>
                    <input type="text" class="form-control" id='txtNamaResto' disabled>
                </div>
                <div class="form-group">
                    <label>Alamat Restoran </label><small> Pisahkan daerah dengan koma (,). Cth Kec. Pariaman,
                        Kab. Pariaman, Sumatera Barat</small>
                    <input type="text" class="form-control" id='txtAlamatResto' disabled>
                </div>
                <div class="form-group">
                    <label>Nama Owner</label>
                    <input type="text" class="form-control" id='txtNamaOwnser' disabled>
                </div>
                <div class="form-group">
                    <label>Nomor Handphone Restoran</label>
                    <input type="text" class="form-control" id='txtHpRestoran' disabled>
                </div>
                <div class="form-group">
                    <label>Email Restoran</label>
                    <input type="text" class="form-control" id='txtEmailRestoran' disabled>
                </div>
            </div>
            <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            </div>
        </div>
    </div>
</div>

<div class="card card-primary" id="divTambahDataSiswa">

</div>

<script src="{{ asset('ladun/dasbor/siswa/datasiswa.js') }}"></script>
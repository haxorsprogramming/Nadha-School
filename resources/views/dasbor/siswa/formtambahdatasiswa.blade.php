<div class="card-body">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Utama</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Alamat & Kontak</a>
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
        <div class="col-12 col-sm-6 col-lg-6">
            <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" id='txtNamaSiswa'>
                </div>
                <div class="form-group">
                    <label>NISN (Nomor Induk Siswa Nasional)</label>
                    <input type="text" class="form-control" id='txtNisn'>
                </div>
                <div class="form-group">
                    <label>NIS (Nomor Induk Siswa)</label>
                    <input type="text" class="form-control" id='txtNis'>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" id='txtTempatLahir'>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" id='txtTanggalLahir'>
                </div>
            </div>
            <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            </div>
        </div>
    </div>

    <div>
        <a href="#!" class="btn btn-primary btn-icon icon-left" @click="simpanAtc"><i class="fas fa-save"></i> Simpan</a>
    </div>

</div>
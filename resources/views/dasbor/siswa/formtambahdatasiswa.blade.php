<div class="card-body">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Utama</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Alamat & Kontak</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Keluarga</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="firebase-tab" data-toggle="tab" href="#firebase" role="tab" aria-controls="firebase" aria-selected="false">Pendidikan Sebelumnya</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="other" aria-selected="false">Lainnya</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">

    @include('dasbor.siswa.dataumum')

    @include('dasbor.siswa.alamatkontak')

    </div>

    <hr/>
    <div>
        <a href="#!" class="btn btn-primary btn-icon icon-left" @click="simpanAtc"><i class="fas fa-save"></i> Simpan</a>
    </div>

</div>
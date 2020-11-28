<div class="card-body">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Utama</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Alamat & Kontak</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="keluarga-tab" data-toggle="tab" href="#keluarga" role="tab" aria-controls="keluarga" aria-selected="false">Keluarga</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="fisik-tab" data-toggle="tab" href="#fisik" role="tab" aria-controls="fisik" aria-selected="false">Fisik</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="informasidaftar-tab" data-toggle="tab" href="#informasidaftar" role="tab" aria-controls="other" aria-selected="false">Informasi Pendaftaran</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="fotoprofil-tab" data-toggle="tab" href="#fotoprofil" role="tab" aria-controls="fotoprofil" aria-selected="false">Foto Siswa</a>
        </li>
    </ul>
    <form enctype="multipart/form-data" id='frmTambahDataSiswa'>
        <div class="tab-content" id="myTabContent">

            @include('dasbor.siswa.formtambahsiswa.dataumum')
            @include('dasbor.siswa.formtambahsiswa.alamatkontak')
            @include('dasbor.siswa.formtambahsiswa.keluarga')
            @include('dasbor.siswa.formtambahsiswa.fisik')
            @include('dasbor.siswa.formtambahsiswa.informasipendaftaran')
            @include('dasbor.siswa.formtambahsiswa.fotoprofil')

        </div>
    </form>
    <hr />
    <div>
        <a href="#!" class="btn btn-primary btn-icon icon-left" id="btnSimpan" @click="simpanAtc">
            <i class="fas fa-save"></i> <img src="{{ asset('ladun/dasbor/loading.svg') }}" width="20" id="divLoading"> @{{capBtnSimpan}}
        </a>
        &nbsp;&nbsp;
        <a href="#!" class="btn btn-warning btn-icon icon-left" id="btnKembali" @click="kembaliAtc">
            <i class="fas fa-reply"></i> Kembali
        </a>
    </div>

</div>
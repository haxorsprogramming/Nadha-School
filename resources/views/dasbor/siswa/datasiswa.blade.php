<div class="card card-primary" id="divDataSiswa">

    <div class="card card-body">
        <div class="row">
            <a href="#!" class="btn btn-primary btn-icon icon-left" @click="tambahSiswaAtc">Tambah Siswa</a>
        </div>

    </div>

</div>

<div class="card card-primary" id="divTambahDataSiswa">

    @include('dasbor.siswa.formtambahdatasiswa')

</div>

<script src="{{ asset('ladun/dasbor/siswa/datasiswa.js') }}"></script>
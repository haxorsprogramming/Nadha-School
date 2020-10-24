<div class="card card-primary" id="divDataJurusan">
    <div class="card-body">
        <div style="margin-bottom: 20px;">
            <a href="#!" class="btn btn-primary btn-icon icon-left" @click="tambahJurusanAtc"><i class="fas fa-plus-circle"></i> Tambah Jurusan</a>
        </div>
        <table class="table" id="tblDataJurusan">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Jurusan</th>
                    <th>Nama Jurusan</th>
                    <th>Prefix</th>
                    <th>Deks</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataJurusan as $jurusan)
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td></td>
                    <td>{{ $jurusan -> nama_jurusan }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card card-primary" id="divFormTambahJurusan">
    <div class="card-body">

    </div>
</div>

<script src="{{ asset('ladun/dasbor/jurusan/datajurusan.js') }}"></script>
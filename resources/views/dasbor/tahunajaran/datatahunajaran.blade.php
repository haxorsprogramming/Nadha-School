<div class="card card-primary" id="divDataTahunAjaran" style="padding-top: 20px;">

    <div style="margin-bottom: 20px;">
        <a href="#!" class="btn btn-primary btn-icon icon-left">Tambah Tahun Ajaran</a>
    </div>
    <table id="tblDataTahunAjaran" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kd Tahun Ajaran</th>
                <th>Nama Tahun Ajaran</th>
                <th>Mulai Aktif</th>
                <th>Akhir</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datatahunajaran as $tahunajaran)
            <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $tahunajaran -> kd_tahun_ajaran }}</td>
                <td>{{ $tahunajaran -> nama_tahun_ajaran }}</td>
                <td><?=date("j F Y", strtotime( $tahunajaran -> mulai_tanggal )); ?></td>
                <td><?=date("j F Y", strtotime( $tahunajaran -> akhir_tanggal )); ?></td>
                <td>{{ $tahunajaran -> status }}</td>
                <td>
                    <a href="#!" class="btn btn-primary btn-icon icon-left">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tbody>

        </tbody>
    </table>

</div>


<script src="{{ asset('ladun/dasbor/tahunajaran/datatahunajaran.js') }}"></script>
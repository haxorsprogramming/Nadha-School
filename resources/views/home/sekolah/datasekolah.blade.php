<div class="row" id="divDataSekolah">
    <table class="table table-hovered" id="tblDataSekolah">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Nilai</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach($dataSekolah as $sekolah)
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ $sekolah -> caption}}</td>
                    <td>{{ $sekolah -> value}}</td>
                    <td>
                        <a href="#!" class="btn btn-primary btnSide" @click="editAtc('{{ $sekolah -> kd_data }}')"><i class="fas fa-edit"></i> Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="row" id="divEditDataSekolah">

</div>

<script src="{{ asset('ladun/dasbor/sekolah/datasekolah.js') }}"></script>
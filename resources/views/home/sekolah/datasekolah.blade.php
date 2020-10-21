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
    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="card card-primary">
            <div class="card-header">Edit Data Sekolah</div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Data</label>
                    <input type="text" class="form-control" disabled id="txtCaptionData">
                </div>
                <div class="form-group">
                    <label>Deks</label>
                    <textarea class="form-control" disabled id="txtDeks"></textarea>
                </div>
                <div class="form-group">
                    <label>Nilai Data</label>
                    <input type="text" class="form-control" id="txtNilaiData">
                </div>
                <a href="#!" class="btn btn-primary btn-icon icon-left" @click="updateAtc"><i class="fas fa-file-export"></i> Update</a>
            </div>
        </div>
    </div>

</div>

<script src="{{ asset('ladun/dasbor/sekolah/datasekolah.js') }}"></script>
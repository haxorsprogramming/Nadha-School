<div class="card card-primary" id="divDataJurusan">
    <div class="card-body">
        <div style="margin-bottom: 20px;">
            <a href="#!" class="btn btn-primary btn-icon icon-left btnPref" @click="tambahJurusanAtc">
                <i class="fas fa-plus-circle"></i> Tambah Jurusan
            </a>
        </div>
        <table class="table" id="tblDataJurusan">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jurusan</th>
                    <th>Prefix</th>
                    <th>Deks</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                @foreach($dataJurusan as $jurusan)
                
                <?php 

                    $kdJurusan = $jurusan -> kd_jurusan;

                    if(file_exists("ladun/dasbor/img/logo_jurusan/".$kdJurusan.".jpg")){
                        $namaFile = $kdJurusan;
                    }else{
                        $namaFile = "default";
                    }

                ?>
                
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td style="text-align:center;">
                        <img src="{{ asset('ladun/dasbor/img/logo_jurusan/'.$namaFile.'.jpg') }}" style="width:80px;"><br/>
                        <b>{{ $jurusan -> nama_jurusan }}</b>
                    </td>
                    <td>{{ $jurusan -> prefix }}</td>
                    <td>{{ substr($jurusan -> deks, 0, 90) }} ...</td>
                    <td>
                        <a href="#!" class="btn btn-primary btn-icon icon-left">
                            <i class="fas fa-search-plus"></i> Detail
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('dasbor.jurusan.formtambahdatajurusan')


<script src="{{ asset('ladun/dasbor/jurusan/datajurusan.js') }}"></script>
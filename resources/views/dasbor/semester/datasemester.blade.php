<div class="card card-primary">
    <div class="card-body">
        <table id="tblDataSemester" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kd Semester</th>
                    <th>Semester</th>
                    <th>Tahun Ajaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datasemester as $semester)
                <?php 
                    $kdTahunAjaran = $semester -> kd_tahun_ajaran;
                    $tahunAjaran = DB::table('tbl_tahun_ajaran') -> where('kd_tahun_ajaran', $kdTahunAjaran) -> first();
                ?>
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ $semester -> kd_semester }}</td>
                    <td>{{ $semester -> nama }}</td>
                    <td>{{ $tahunAjaran -> nama_tahun_ajaran }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<script src="{{ asset('ladun/dasbor/semester/datasemester.js') }}"></script>
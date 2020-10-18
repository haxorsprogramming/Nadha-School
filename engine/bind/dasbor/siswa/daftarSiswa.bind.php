<div class="card" id="divDaftarSiswa">
    <div class="card-body">
        <div style="margin-bottom:20px;">
            <a href="#!" class="btn btn-primary" @click="tambahAtc"> <i class="glyph-icon simple-icon-user"></i> {{capButtonTambah}}</a>
        </div>
        <table id="tblDaftarSiswa" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Rombel</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="dt in dataTabel">
                    <td>{{dt.no}}</td>
                    <td>{{dt.nis}}</td>
                    <td>{{dt.nama}}</td>
                    <td>{{dt.rombel}}</td>
                    <td>{{dt.status}}</td>
                    <td><a href="#!" class="btn btn-success"><i class="glyph-icon iconsminds-add"></i> <b>Detail</b></a></td>
                </tr>
            </tbody>
        </table>

        <div style="text-align: center;">
        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
            <ul class="pagination pagination-sm">
                <li class="paginate_button page-item previous" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link prev"><i class="simple-icon-arrow-left"></i></a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link next"><i class="simple-icon-arrow-right"></i></a></li>
            </ul>
        </div>
        </div>

    </div>
</div>


<script src="<?= STYLEBASE; ?>/dasbor/daftarSiswa.js"></script>
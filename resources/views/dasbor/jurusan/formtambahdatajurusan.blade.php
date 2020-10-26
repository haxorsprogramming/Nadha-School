<div class="card card-primary" id="divFormTambahJurusan">

    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label>Nama Jurusan</label>
                    <input type="text" class="form-control" id="txtNamaJurusan">
                </div>
                <div class="form-group">
                    <label>Prefix (Singkatan)</label>
                    <input type="text" class="form-control" id="txtPrefix">
                </div>
                <div class="form-group">
                    <label>Deks</label>
                    <textarea class="form-control" style="resize: none;" id="txtDeks"></textarea>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div style="text-align: center;">
                    <img src="{{ asset('ladun/dasbor/img/fig_2.png') }}" style="width: 250px;">
                </div>
            </div>
            <div>
                <a href="#!" class="btn btn-primary btn-icon icon-left" id="btnSimpan" @click="prosesTambahAtc">
                    <i class="fas fa-save"></i> @{{ capBtnSimpan }} <img src="{{ asset('ladun/dasbor/loading.svg') }}" width="20" id="divLoading">
                </a>
            </div>
        </div>
    </div>
    
</div>
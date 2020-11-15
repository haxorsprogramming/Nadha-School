<div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">

    <div class="row">

        <div class="col-6 col-sm-6 col-lg-6">
            <div class="form-group">
                <label>Alamat Siswa</label>
                <textarea placeholder="Alamat siswa" class="form-control" style="resize:none;"></textarea>
            </div>
            <div class="form-group">
                <label>Provinsi</label>
                <select id="txtAlamat" class="form-control">
                    <option v-for="prov in provinsi" v-bind:value="prov.id_prov">@{{ prov.nama }}</option>
                </select>
            </div>
            <div class="form-group">
                <label>Kabupaten / Kota</label>
                <select id="txtAlamat" class="form-control">

                </select>
            </div>
            <div class="form-group">
                <label>Kecamatan</label>
                <select id="txtAlamat" class="form-control">

                </select>
            </div>
            <div class="form-group">
                <label>Desa / Kelurahan</label>
                <select id="txtAlamat" class="form-control">

                </select>
            </div>
        </div>

        <div class="col-6 col-sm-6 col-lg-6">
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" id='txtEmail'>
            </div>
        </div>

    </div>

</div>
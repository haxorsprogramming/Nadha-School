<div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">

    <div class="row">

        <div class="col-12 col-sm-6 col-lg-6">
            <div class="form-group">
                <label>Alamat Siswa</label>
                <textarea placeholder="Alamat siswa" class="form-control" style="resize:none;" id="txtAlamatSiswa" name="txtAlamatSiswa"></textarea>
            </div>
            <div class="form-group">
                <label>Provinsi</label>
                <select class="form-control" onchange="divNulledSiswa.provSPilih()" id="txtProvinsi" name="txtProvinsi">
                    <option v-for="prov in provinsi" v-bind:value="prov.id_prov">@{{ prov.nama }}</option>
                </select>
            </div>
            <div class="form-group">
                <label>Kabupaten / Kota</label>
                <select class="form-control" onchange="divNulledSiswa.kabSPilih()" id="txtKabupaten" name="txtKabupaten">
                    <option v-for="kab in kabS" v-bind:value="kab.id_kab">@{{ kab.nama }}</option>
                </select>
            </div>
            <div class="form-group">
                <label>Kecamatan</label>
                <select class="form-control" onchange="divNulledSiswa.kecSPilih()" id="txtKecamatan" name="txtKecamatan">
                    <option v-for="kec in kecS" v-bind:value="kec.id_kec">@{{ kec.nama }}</option>
                </select>
            </div>
            <div class="form-group">
                <label>Desa / Kelurahan</label>
                <select class="form-control" id="txtDesa" name="txtDesa">
                    <option v-for="des in desS" v-bind:value="des.id_desa">@{{ des.nama }}</option>
                </select>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-6">
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" id="txtEmail" name="txtEmail">
            </div>
            <div class="form-group">
                <label>No Hp</label>
                <input type="text" class="form-control" id="txtNoHp" name="txtNoHp">
            </div>
            <div class="form-group">
                <label>No Whatsapp</label>
                <input type="text" class="form-control" id="txtWhatsapp" name="txtWhatsapp">
            </div>
        </div>

    </div>

</div>
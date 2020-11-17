<div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row">

                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" class="form-control" id='txtNamaSiswa'>
                    </div>
                    <div class="form-group">
                        <label>NISN (Nomor Induk Siswa Nasional)</label>
                        <input type="text" class="form-control" id='txtNisn'>
                    </div>
                    <div class="form-group">
                        <label>NIS (Nomor Induk Siswa)</label>
                        <input type="text" class="form-control" id='txtNis'>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" id='txtTempatLahir'>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" id='txtTanggalLahir'>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <select class="form-control" id="txtAgama">
                            @foreach($agama as $ag)
                                <option value="{{ $ag }}">{{ $ag }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Golongan Darah</label>
                        <select class="form-control" id="txtGolonganDarah">
                            @foreach($golonganDarah as $darah)
                                <option value="{{ $darah }}">{{ $darah }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="form-group" id="frgAlamatLahir">
                        <label>Alamat Lahir <small>(Masukkan No. rumah, nama jalan secara lengkap)</small></label>
                        <textarea class="form-control" style="resize:none;" placeholder="Alamat lahir"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Provinsi Lahir</label>
                        <select class="form-control" onchange="provinsiPilih()" id="txtProvinsiLahir">
                            <option v-for="prov in provinsi" v-bind:value="prov.id_prov">@{{ prov.nama }}</option>
                        </select>
                    </div>
                    <div class="form-group" id="frgKabupatenLahir">
                        <label>Kabupaten / Kota Lahir</label>
                        <select class="form-control" onchange="kabupatenPilih()" id="txtKabupatenLahir">
                            <option v-for="kab in kabupaten" v-bind:value="kab.id_kab">@{{ kab.nama }}</option>
                        </select>
                    </div>
                    <div class="form-group" id="frgKecamatanLahir">
                        <label>Kecamatan Lahir</label>
                        <select class="form-control" onchange="kecamatanPilih()" id="txtKecamatanLahir">
                            <option v-for="kec in kecamatan" v-bind:value="kec.id_kec">@{{ kec.nama }}</option>
                        </select>
                    </div>
                    <div class="form-group" id="frgDesaLahir">
                        <label>Desa / Kelurahan Lahir</label>
                        <select class="form-control" id="txtDesaLahir">
                            <option v-for="des in desa" v-bind:value="des.id_desa">@{{ des.nama }}</option>
                        </select>
                    </div>
                    
                </div>

            </div>
        </div>
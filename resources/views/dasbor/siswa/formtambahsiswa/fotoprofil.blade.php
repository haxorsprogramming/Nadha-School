<div class="tab-pane fade show" id="fotoprofil" role="tabpanel" aria-labelledby="fotoprofil-tab">

    <div class="row" style="margin-top:20px;">

        <div class="col-12 col-sm-6 col-lg-6">
            <div class="teks-tengah">
                <img src="{{ asset('ladun/dasbor/img/avatar-1.png') }}" id="txtTempatFoto" class="imgPrev imudef">
                <div style="margin-top:20px;">
                    <input type="file" id="txtFoto" name="txtFoto" onchange="getImg()" placeholder="Pilih foto" /><br/>
                    <small>Masukkan foto siswa (foto harus berdimensi kotak 1:1)</small>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-6">
            <div class="teks-tengah">
                <h5>Preview data siswa</h5>
                <table class="table table-bordered">
                    <tr>
                        <td>Nama</td><td>@{{namaSiswa}}</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

</div>
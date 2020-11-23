<div class="tab-pane fade show" id="fotoprofil" role="tabpanel" aria-labelledby="fotoprofil-tab">

    <div class="row" style="margin-top:20px;">

        <div class="col-12 col-sm-12 col-lg-12">
            <div class="teks-tengah">
                <img src="{{ asset('ladun/dasbor/img/avatar-1.png') }}" id="txtTempatFoto" class="imgPrev imudef">
                <div style="margin-top:20px;">
                    <input type="file" id="txtFoto" name="txtFoto" onchange="getImg()" placeholder="Pilih foto" /><br/>
                    <small>Masukkan foto siswa (foto harus berdimensi kotak 1:1)</small>
                </div>
            </div>
        </div>

    </div>

</div>
// ROUTE 
var rToGetProvinsi = server + "daerah/provinsi";
var rToGetKabupaten = server + "daerah/provinsi/";
var rToGetKecamatan = server + "daerah/kabupaten/";
var rToGetDesa = server + "daerah/kecamatan/";
var rToTambahSiswa = server + "siswa/datasiswa/tambah";
var rToGetDataSiswa = server + "siswa/getdatasiswa";
var rToDetailSiswa = "siswa/detailsiswa/";
// VUE OBJECT 
var divDataSiswa = new Vue({
    el : '#divDataSiswa',
    data : {
        modul : 'datasiswa',
        path : []
    },
    methods : {
        tambahSiswaAtc : function ()
        {
           $("#divDataSiswa").hide();
           $('#divTambahDataSiswa').show();
           document.querySelector('#txtNamaSiswa').focus();
        },
        detailAtc : function (nis)
        {
            renderMenu(rToDetailSiswa+nis, 'Detail Siswa');
        }
    }
});

var divTambahDataSiswa = new Vue({
    el : '#divTambahDataSiswa',
    data : {
        provinsi : [],
        kabupaten : [],
        kecamatan : [],
        desa : [],
        kabS : [],
        kecS : [],
        desS : [],
        capBtnSimpan : 'Simpan'
    },
    methods : {
        simpanAtc : function ()
        {
            let namaSiswa = document.querySelector('#txtNamaSiswa').value;
            let nisn = document.querySelector('#txtNisn').value;
            let nis = document.querySelector('#txtNis').value;
            let tanggalLahir = document.querySelector('#txtTanggalLahir').value;
            let agama = document.querySelector('#txtAgama').value;
            let golonganDarah = document.querySelector('#txtGolonganDarah').value;
            let alamatLahir = document.querySelector('#txtAlamatLahir').value;
            let provinsiLahir = document.querySelector('#txtProvinsiLahir').value;
            let kabupatenLahir = document.querySelector('#txtKabupatenLahir').value;
            let kecamatanLahir = document.querySelector('#txtKecamatanLahir').value;
            let desaLahir = document.querySelector('#txtDesaLahir').value;
            let alamatSiswa = document.querySelector('#txtAlamatSiswa').value;
            let provinsi = document.querySelector('#txtProvinsi').value;
            let kabupaten = document.querySelector('#txtKabupaten').value;
            let kecamatan = document.querySelector('#txtKecamatan').value;
            let desa = document.querySelector('#txtDesa').value;
            let email = document.querySelector('#txtEmail').value;
            let hp = document.querySelector('#txtNoHp').value;
            let wa = document.querySelector('#txtWhatsapp').value;
            let statusOrtu = document.querySelector('#txtStatusOrangTua').value;
            let namaAyah = document.querySelector('#txtNamaAyah').value;
            let namaIbu = document.querySelector('#txtNamaIbu').value;
            let namaWali = document.querySelector('#txtNamaWali').value;
            let hpOrtu = document.querySelector('#txtHpOrangTua').value;
            let alamatOrtu = document.querySelector('#txtAlamatOrangTua').value;
            let tinggiBadan = document.querySelector('#txtTinggiBadan').value;
            let beratBadan = document.querySelector('#txtBeratBadan').value;
            let berkacamata = document.querySelector('#txtBerkacamata').value;
            let butaWarna = document.querySelector('#txtButaWarna').value;
            let asalSekolah = document.querySelector('#txtAsalSekolah').value;
            let noIjazah = document.querySelector('#txtNoIjazah').value;
            let statusMasuk = document.querySelector('#txtStatusMasuk').value;
            let noTesMasuk = document.querySelector('#txtNoTesMasuk').value;
            let tanggalMasuk = document.querySelector('#txtTanggalMasuk').value;
            let foto = document.querySelector('#txtFoto').value;
            if(namaSiswa === '' || nisn === '' || nis === '' || alamatLahir === '' || kabupatenLahir === '' || kecamatanLahir === '' || desaLahir === '' || alamatSiswa === '' || kabupaten === '' || kecamatan === '' || desa === ''){
                pesanUmumApp('warning', 'Isi field!!!', 'Harap isi semua field...');
            }else{
                if(email === '' || hp === '' || wa === '' || namaAyah === '' || namaIbu === '' || namaWali === '' || hpOrtu === '' || alamatOrtu === ''){
                    pesanUmumApp('warning', 'Isi field!!!', 'Harap isi semua field...');
                }else{
                    if(tinggiBadan === '' || beratBadan === '' || asalSekolah === '' || noIjazah === '' || noTesMasuk === '' || tanggalMasuk === '' || foto === ''){
                        pesanUmumApp('warning', 'Isi field!!!', 'Harap isi semua field...');
                    }else{
                        $("#frmTambahDataSiswa").submit();
                    }
                }
            }

        },
        kembaliAtc : function ()
        {
            app.dataSiswaAtc();
        }
    }
});

var divNulledSiswa = new Vue({
    el : '#divNulledSiswa',
    data : {

    },
    methods : {
        provSPilih : function ()
        {
            this.clrSKab();
            this.clrKec();
            this.clrDes();
            dimStart();
            let idProvinsi = document.querySelector('#txtProvinsi').value;
            $.get(rToGetKabupaten+idProvinsi, function(data){
                let kabupaten = data.kabupaten;
                kabupaten.forEach(renderKabupaten);
                function renderKabupaten(item, index){
                    divTambahDataSiswa.kabS.push({ nama:kabupaten[index].nama, id_kab:kabupaten[index].id_kab });   
                }
                dimStop();
            });
        },
        kabSPilih : function ()
        {
            this.clrKec();
            this.clrDes();
            dimStart();
            let idKabupaten = document.querySelector('#txtKabupaten').value;
            $.get(rToGetKecamatan+idKabupaten, function(data){
                let kecamatan = data.kecamatan;
                kecamatan.forEach(renderKecamatan);
                function renderKecamatan(item, index){
                    divTambahDataSiswa.kecS.push({ nama:kecamatan[index].nama, id_kec:kecamatan[index].id_kec });
                }
                dimStop();
            })
        },
        kecSPilih : function ()
        {
            this.clrDes();
            dimStart();
            let idKecamatan = document.querySelector('#txtKecamatan').value;
            $.get(rToGetDesa+idKecamatan, function(data){
                let desa = data.kelurahan;
                desa.forEach(renderDesa);
                function renderDesa(item, index){
                    divTambahDataSiswa.desS.push({ nama:desa[index].nama, id_desa:desa[index].id_kel });
                }
                dimStop();
            });
        },
        clrSKab : function ()
        {
            let jlhItem = divTambahDataSiswa.kabS.length;
            var i;
            for(i = 0; i < jlhItem; i++){
                divTambahDataSiswa.kabS.splice(0, 1);
            }
        },
        clrKec : function ()
        {
            let jlhItem = divTambahDataSiswa.kecS.length;
            var i;
            for(i = 0; i < jlhItem; i++){
                divTambahDataSiswa.kecS.splice(0, 1);
            }
        },
        clrDes : function ()
        {
            let jlhItem = divTambahDataSiswa.desS.length;
            var i;
            for(i = 0; i < jlhItem; i++){
                divTambahDataSiswa.desS.splice(0, 1);
            }
        }
    }
});

// INISIALISASI 
$('#divTambahDataSiswa').hide();
$('#divLoading').hide();

$('#tblDataSiswa').dataTable({
    "searching" : false,
    "processing" : true,
    "serverSide": true,
    "ajax":{
        url : rToGetDataSiswa,
        type: "post",
        error: function(){
            pesanUmumApp('warning', 'Error', 'Error menampilkan data');
        }
    }
});

$.get(rToGetProvinsi, function (data){
    let provinsi = data.provinsi;
    provinsi.forEach(renderProvinsi);
    function renderProvinsi(item, index){
        divTambahDataSiswa.provinsi.push({ nama:provinsi[index].nama, id_prov:provinsi[index].id_prov });
    }

});


// FUNCTION 
$('#tblDataSiswa').on('click','.btnDetail', function(){
    let nis = $(this).data('id');
    divDataSiswa.detailAtc(nis);
});

$("#frmTambahDataSiswa").on('submit', function(e){
    e.preventDefault();
    $.ajax({
        type: "POST",
        url : rToTambahSiswa,
        data : new FormData(this),
        dataType : 'json',
        contentType : false,
        cache : false,
        processData : false,
        beforeSend : function(){
            $('#divLoading').show();
            $('#btnSimpan').addClass('disabled');
        },
        success : function(data){
           switch(data.status){
                case 'error_file_type' :
                   pesanUmumApp('warning', 'Error', 'Tipe foto tidak diperbolehkan, harus jpg!!');
                   endStatUpload();
                   break;
                case 'error_file_size' :
                    pesanUmumApp('warning', 'Error', 'Ukuran foto tidak diperbolehkan, harus dibawah 2Mb!!');
                    endStatUpload();
                    break;
                case 'error_data_duplicate' :
                    pesanUmumApp('warning', 'Data error', 'Data duplikasi tidak diperbolehkan (nis, nisn, email, & no handphone) ...');
                    endStatUpload();
                    break;
                case 'success_save_data' : 
                    pesanUmumApp('success', 'Sukses', 'Data siswa baru berhasil ditambahkan..');
                    app.dataSiswaAtc();
                    break;
                default : 
           }
        }
    });
});

function endStatUpload()
{
    $('#divLoading').hide();
    $('#btnSimpan').removeClass('disabled');
}

function getImg()
{
    // $('#txtTempatFoto').hide();
    var sampul = document.querySelector('#txtFoto');
    var imgPrev = document.querySelector('.imgPrev');
    var fileGambar = new FileReader();
    fileGambar.readAsDataURL(sampul.files[0]);

    fileGambar.onload = function(e){
        let hasil = e.target.result;
        imgPrev.src = hasil;
    }
    
}

function provinsiPilih()
{
    let idProvinsi = document.querySelector('#txtProvinsiLahir').value;
    getKabupaten(idProvinsi);
}

function kabupatenPilih()
{
    let idKabupaten = document.querySelector('#txtKabupatenLahir').value;
    getKecamatan(idKabupaten);
}

function kecamatanPilih()
{
    let idKecamatan = document.querySelector('#txtKecamatanLahir').value;
    getDesa(idKecamatan);
}

function getKabupaten(idProvinsi)
{
    clearKabupaten();
    clearKecamatan();
    clearDesa();
    dimStart();
    $.get(rToGetKabupaten+idProvinsi, function(data){
        let kabupaten = data.kabupaten;
        kabupaten.forEach(renderKabupaten);
        function renderKabupaten(item, index){
            divTambahDataSiswa.kabupaten.push({ nama:kabupaten[index].nama, id_kab:kabupaten[index].id_kab });
        }
        dimStop();
    });
}

function getKecamatan(idKabupaten)
{
    clearKecamatan();
    clearDesa();
    dimStart();
    $.get(rToGetKecamatan+idKabupaten, function(data){
        let kecamatan = data.kecamatan;
        kecamatan.forEach(renderKecamatan);
        function renderKecamatan(item, index){
            divTambahDataSiswa.kecamatan.push({ nama:kecamatan[index].nama, id_kec:kecamatan[index].id_kec });
        }
        dimStop();
    });
}

function getDesa(idKecamatan)
{
    clearDesa();
    dimStart();
    $.get(rToGetDesa+idKecamatan, function(data){
        let desa = data.kelurahan;
        desa.forEach(renderDesa);
        function renderDesa(item, index){
            divTambahDataSiswa.desa.push({ nama:desa[index].nama, id_desa:desa[index].id_kel });
        }
        dimStop();
    });
}

function clearKabupaten()
{
    let jlhItem = divTambahDataSiswa.kabupaten.length;
    var i;
    for(i = 0; i < jlhItem; i++){
        divTambahDataSiswa.kabupaten.splice(0, 1);
    }
}

function clearKecamatan()
{
    let jlhItem = divTambahDataSiswa.kecamatan.length;
    var i;
    for(i = 0; i < jlhItem; i++){
        divTambahDataSiswa.kecamatan.splice(0, 1);
    }
}

function clearDesa()
{
    let jlhItem = divTambahDataSiswa.desa.length;
    var i;
    for(i = 0; i < jlhItem; i++){
        divTambahDataSiswa.desa.splice(0, 1);
    }
}

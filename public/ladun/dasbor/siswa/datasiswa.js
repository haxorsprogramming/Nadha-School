// ROUTE 
var rToGetProvinsi = server + "daerah/provinsi";
var rToGetKabupaten = server + "daerah/provinsi/";
var rToGetKecamatan = server + "daerah/kabupaten/";
var rToGetDesa = server + "daerah/kecamatan/";

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
        desS : []
    },
    methods : {
        simpanAtc : function ()
        {
            let idDesa = document.querySelector('#txtDesaLahir').value;
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
            let idProvinsi = document.querySelector('#txtAlamat').value;
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

$.get(rToGetProvinsi, function (data){
    let provinsi = data.provinsi;
    provinsi.forEach(renderProvinsi);
    function renderProvinsi(item, index){
        divTambahDataSiswa.provinsi.push({ nama:provinsi[index].nama, id_prov:provinsi[index].id_prov });
    }

});

// FUNCTION 
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

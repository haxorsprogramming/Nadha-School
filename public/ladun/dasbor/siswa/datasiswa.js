// ROUTE 
var rToGetProvinsi = server + "daerah/provinsi";

// VUE OBJECT 
var divDataSiswa = new Vue({
    el : '#divDataSiswa',
    data : {

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

    },
    methods : {
        simpanAtc : function ()
        {
            
        }
    }
});

// INISIALISASI 
$('#divTambahDataSiswa').hide();

$.get(rToGetProvinsi, function (data){
    console.log(data);
});
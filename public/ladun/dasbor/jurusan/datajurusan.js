// ROUTE 

// VUE OBJECT 
var divDataJurusan = new Vue({
    el : '#divDataJurusan',
    data : {

    },
    methods : {
        tambahJurusanAtc : function ()
        {
           $("#divFormTambahJurusan").show();
           $("#divDataJurusan").hide();
        }
    }
});

// INISIALISASI 
$("#tblDataJurusan").dataTable();
$("#divFormTambahJurusan").hide();

// FUNCTION 
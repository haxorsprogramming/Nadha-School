// ROUTE 

// VUE OBJECT 
var divDataJurusan = new Vue({
    el : '#divDataJurusan',
    data : {

    },
    methods : {
        tambahJurusanAtc : function ()
        {
            $("#divLoading").show();
            // $("#divFormTambahJurusan").show();
            // $("#divDataJurusan").hide();
        }
    }
});

// INISIALISASI 
$("#tblDataJurusan").dataTable();
$("#divFormTambahJurusan").hide();
$("#divLoading").hide();
// FUNCTION 
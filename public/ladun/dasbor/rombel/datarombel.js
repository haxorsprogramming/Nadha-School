// ROUTE 

// VUE OBJECT 
var divDataRombel = new Vue({
    el : '#divDataRombel',
    data : {

    },
    methods : {
        tambahRombelAtc : function ()
        {
            $('#divFormTambahRombel').show();
            $('#divDataRombel').hide();
            app.activeForm = "Tambah data rombel";
            document.querySelector('#txtNamaKelas').focus();
        }
    }
});

var divFormTambahRombel = new Vue({
    el : '#divFormTambahRombel',
    data : {
        capBtnSimpan : 'Simpan'
    },
    methods : {
        prosesTambahAtc : function ()
        {
            $("#divLoading").show();
        }
    }
});


// INISIALISASI 
$('#tblDataRombel').dataTable();
$('#divFormTambahRombel').hide();
$('#divLoading').hide();

// FUNCTION 

// ROUTE 
var rToTambahDataRombel = server + "rombel/datarombel/tambah";

// MESSAGE 
var msgSuksesTambahRombel = "Berhasil menambahkan data rombel ...";

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
            document.querySelector('#txtNamaRombel').focus();
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
            $('#btnSimpan').addClass("disabled");
            $("#divLoading").show();
            this.capBtnSimpan = "Menyimpan data jurusan ...";
            prosesTambahRombel();
        }
    }
});


// INISIALISASI 
$('#tblDataRombel').dataTable();
$('#divFormTambahRombel').hide();
$('#divLoading').hide();

// FUNCTION 
function prosesTambahRombel()
{
    let namaRombel = document.querySelector('#txtNamaRombel').value;
    let jurusan = document.querySelector('#txtJurusan').value;
    let deks = document.querySelector('#txtDeks').value;
    let dataSend = {'namaRombel':namaRombel, 'jurusan':jurusan, 'deks':deks}

    $.post(rToTambahDataRombel, dataSend, function(data){
        pesanUmumApp('success', 'Sukses ...', msgSuksesTambahRombel);
        app.dataRombelAtc();
    });

}
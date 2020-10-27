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
        }
    }
});
// INISIALISASI 
$('#divTambahDataSiswa').hide();
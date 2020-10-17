// VUE OBJECT 
var divDaftarSiswa = new Vue({
    el : '#divDaftarSiswa',
    data : {
        capButtonTambah : 'Tambah Siswa',
        nilai : 0
    },
    methods : {
        tambahAtc : function()
        {
            this.nilai += 1;
            console.log(this.nilai);
        }
    }
});

// INISIALISASI 
$('#tblDaftarSiswa').dataTable({
    "searching": false
});
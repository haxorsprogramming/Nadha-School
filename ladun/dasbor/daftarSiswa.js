// VUE OBJECT 
var divDaftarSiswa = new Vue({
    el : '#divDaftarSiswa',
    data : {
        capButtonTambah : 'Tambah Siswa',
        nilai : 0,
        dataTabel : []
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
// $('#tblDaftarSiswa').dataTable({
//     "searching": false
// });

for(i = 0; i < 10; i++){
    divDaftarSiswa.dataTabel.push({no : '______', nis : '______', nama : '______', rombel : '______', status : '______'});
}

setTimeout(function(){
    for(i = 0; i < 10; i++){
        divDaftarSiswa.dataTabel.splice(0,1);
    }
    renderTabel();
}, 500);

// FUNCTION 

function renderTabel()
{
    divDaftarSiswa.dataTabel.push({no : 1, nis : '10001', nama : 'Aditia Darma Nst', rombel : 'XII TKJ', status : 'Belajar'});
    divDaftarSiswa.dataTabel.push({no : 1, nis : '10001', nama : 'Aditia Darma Nst', rombel : 'XII TKJ', status : 'Belajar'});
    divDaftarSiswa.dataTabel.push({no : 1, nis : '10001', nama : 'Aditia Darma Nst', rombel : 'XII TKJ', status : 'Belajar'});
    divDaftarSiswa.dataTabel.push({no : 1, nis : '10001', nama : 'Aditia Darma Nst', rombel : 'XII TKJ', status : 'Belajar'});
    divDaftarSiswa.dataTabel.push({no : 1, nis : '10001', nama : 'Aditia Darma Nst', rombel : 'XII TKJ', status : 'Belajar'});
    divDaftarSiswa.dataTabel.push({no : 1, nis : '10001', nama : 'Aditia Darma Nst', rombel : 'XII TKJ', status : 'Belajar'});
    divDaftarSiswa.dataTabel.push({no : 1, nis : '10001', nama : 'Aditia Darma Nst', rombel : 'XII TKJ', status : 'Belajar'});
    divDaftarSiswa.dataTabel.push({no : 1, nis : '10001', nama : 'Aditia Darma Nst', rombel : 'XII TKJ', status : 'Belajar'});
    divDaftarSiswa.dataTabel.push({no : 1, nis : '10001', nama : 'Aditia Darma Nst', rombel : 'XII TKJ', status : 'Belajar'});
    divDaftarSiswa.dataTabel.push({no : 1, nis : '10001', nama : 'Aditia Darma Nst', rombel : 'XII TKJ', status : 'Belajar'});
}

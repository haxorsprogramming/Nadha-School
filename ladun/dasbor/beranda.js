var divBeranda = new Vue({
    el : '#divBeranda',
    data : {
        caption : 'Berikut ada data statistik anda',
        jlhPelanggan : '',
        jlhCucian : ''
    },
    methods : {
        pelangganProfile : function(username){
            $('#divUtama').html("Memuat ...");
            $('#divUtama').load('pelanggan/pelangganProfile',{'username':username});
        }
    }
});

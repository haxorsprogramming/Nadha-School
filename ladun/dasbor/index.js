// VUE OBJECT 
var divFooter = new Vue({
  el : '#divFooter',
  data : {
    developer : 'Haxorsprogramming'
  }
});


var divTitleMap = new Vue({
  el : '#divTitleMap',
  data : {
    utama : ''
  }
});

var divMenu = new Vue({
  el : '#divMenu',
  data : {

  },
  methods : {
    dashboardAtc : function()
    {
      renderPage('dasbor/beranda', 'Dashboard');
    },
    daftarSiswaAtc : function()
    {
      renderPage('siswa/daftarSiswa', 'Daftar Siswa');
    }
  }
});

// INISIALISASI 
renderPage('dasbor/beranda', 'Dashboard');

// FUNCTION 
function renderPage(halaman, titleMap)
{
  divTitleMap.utama = titleMap;
  progStart();
  $('#divUtama').html("Memuat form ..");
  $('#divUtama').load(server + halaman);
  progStop();
}

function progStart()
{
  NProgress.start();
}

function progStop()
{
  NProgress.done();
}

//inisialisasi variabel lokal
//ini bisa ada lampu lampunya
const beranda = 'dasbor/beranda';

const d = new Date();
const tahun = d.getFullYear();
var halaman;

$(document).ready(function () {
  $.fakeLoader({
      timeToHide:3200,
      bgColor: '#2980b9',
      spinner:"spinner3"
  });
});

// fungsi pertama kali dijalankan
renderMenu(beranda);

//objek vue footer
var divFooter = new Vue({
  el: '#divFooter',
  data: {
    author: "NadhaMedia",
    tahun: tahun
  }
});

var divJudul = new Vue({
  el :'#capUtama',
  data : {
    judulForm : 'Beranda Sekolah'
  }
});

//objek vue menu
var divMenu = new Vue({
  el: '#divMenu',
  data: {},
  methods: {
    berandaAct: function() {
      renderMenu(beranda);
      divJudul.judulForm = "Beranda";
    }
  }
});

function renderMenu(halaman) {
  $('#divUtama').html("Memuat ...");
  $('#divUtama').load(halaman);
}

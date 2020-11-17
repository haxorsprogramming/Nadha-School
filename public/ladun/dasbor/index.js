// ROUTE 
const beranda = "dashboard/beranda";
const datasekolah = "sekolah/datasekolah";
const datasiswa = "siswa/datasiswa";
const datarombel = "rombel/datarombel";
const datatahunajaran = "tahunajaran/datatahunajaran";
const datasemester = "semester/datasemester";
const datajurusan = "jurusan/datajurusan";

const rToLogout = server + "logout";

// VUE OBJECT 
var app = new Vue({
    el : '#app',
    data : {
        activeForm : '',
        developer : 'Haxorsprogrammingclub'
    },
    methods : {
        dashboardAtc : function ()
        {
            renderMenu(beranda, 'Dashboard');
        },
        berandaAtc : function ()
        {
            renderMenu(beranda);
        },
        dataSekolahAtc : function ()
        {
            renderMenu(datasekolah, 'Data Sekolah');
        },
        dataSiswaAtc : function ()
        {
            renderMenu(datasiswa, 'Data Siswa');
        },
        dataRombelAtc : function ()
        {
          renderMenu(datarombel, 'Data Rombel (Kelas)');
        },
        jurusanAtc : function ()
        {
          renderMenu(datajurusan, 'Data Jurusan');
        },
        tahunAjaranAtc : function ()
        {
          renderMenu(datatahunajaran, 'Data Tahun Ajaran');
        },
        semesterAtc : function ()
        {
          renderMenu(datasemester, 'Data Semester');
        },
        logoutAtc : function ()
        {
            logOutConfirm();
        }
    }
});

// INISIALISASI 
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
renderMenu(beranda, 'Dashboard');

// FUNCTION 
function renderMenu(halaman, titleForm){
    progStart();
    $('#divUtama').html("Memuat form ..");
    app.activeForm = titleForm;
    $('#divUtama').load(server + halaman);
    progStop();
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}

function progStart()
{
  NProgress.start();
}

function progStop()
{
  NProgress.done();
}

function dimStart()
{
  $("#loading-ajax").show();
}

function dimStop()
{
  $("#loading-ajax").hide();
}

function logOutConfirm()
{
    Swal.fire({
        title: 'Keluar aplikasi?',
        text: 'Yakin keluar dari aplikasi',
        icon: 'warning',
        showCancelButton : true,
        confirmButtonColor : '#3085d6',
        cancelButtonColor : '#d33',
        confirmButtonText : 'Ya',
        cancelButtonText : 'Tidak'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.assign(rToLogout);
        }
      })
}
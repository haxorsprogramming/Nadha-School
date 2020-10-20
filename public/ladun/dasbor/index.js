// ROUTE 
const beranda = 'dashboard/beranda';
const datasekolah = 'sekolah/datasekolah';

const rToLogout = server + 'logout';

// VUE OBJECT 
var app = new Vue({
    el : '#app',
    data : {
        activeForm : '',
        developer : 'Haxorsprogrammingclub'
    },
    methods : {
        dashboardAtc : function()
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
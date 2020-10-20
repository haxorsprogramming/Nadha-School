// ROUTE 
const rToLogout = server + 'logout';
// VUE OBJECT 
var app = new Vue({
    el : '#app',
    data : {
        activeForm : 'Dashboard'
    },
    methods : {
        dashboardAtc : function()
        {
            
        },
        logoutAtc : function ()
        {
            logOutConfirm();
        }
    }
});

// INISIALISASI 

// FUNCTION 
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
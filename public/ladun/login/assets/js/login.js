// ROUTE 
const rToLoginProses = server + 'login/prosesLogin';
const rToDashboard = server + 'dashboard';
// VUE OBJECT
const divForm = {
    data() {
        return {
            developer: "Haxorsprogrammingclub",
        };
    },
    methods: {
        loginAtc: function () {
            prosesLogin();
        },
    },
};
Vue.createApp(divForm).mount("#divForm");

// INISIALISASI
$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

setTimeout(function () {
    document.querySelector("#txtUsername").focus();
}, 200);

// FUNCTION
function prosesLogin() {
    let username = document.querySelector('#txtUsername').value;
    let password = document.querySelector('#txtPassword').value;
    let dataSend = {'username':username, 'password':password}
    $.post(rToLoginProses, dataSend, function(data){
      if(data.status === 'success'){
        window.location.assign(rToDashboard);
      }else{
        pesanUmumApp('error', 'Kesalahan autentifikasi', 'Login gagal!! periksa kembali username & password ..');
      }
    });
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}
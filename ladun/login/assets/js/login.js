// ROUTE 
const rToLogin = server + 'login/prosesLogin';

// VUE OBJECT 
const divForm = {
    data() {
      return {
        developer : 'Haxorsprogrammingclub'
      }
    },
    methods : {
        loginAtc : function()
        {
            prosesLogin();
        }
    }
  }
Vue.createApp(divForm).mount('#divForm');

// INISIALISASI 
$(document).ready(function(){
    setTimeout(function(){
        $('#txtUsername').focus();
    }, 500);
});

// FUNCTION
function prosesLogin()
{
    let username = document.querySelector('#txtUsername').value;
    let password = document.querySelector('#txtPassword').value;
    if(username === '' || password === ''){
        pesanUmumApp('warning', 'Isi field!!', 'Isi username & password!!');
    }else{
        let dataSend = {'username':username, 'password':password}
        $.post(rToLogin, dataSend, function(data){
            let obj = JSON.parse(data);
            console.log(obj);
        });
    }
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
} 
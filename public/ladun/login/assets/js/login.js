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
setTimeout(function (){
  document.querySelector('#txtUsername').focus();
}, 200);

// FUNCTION 
function prosesLogin()
{
  let dataSend = {'nama':'Aditia'}
  console.log(dataSend);
}
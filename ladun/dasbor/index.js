// VUE OBJECT 
const divFooter = {
  data(){
    return {
      developer : 'Haxorsprogrammingclub'
    }
  },
  methods : {
      
  }
}
Vue.createApp(divFooter).mount('#divFooter');

const divTitleMap = {
  data() {
    return {
      utama : 'Dashboard'
    }
  },
  methods : {
    
  }
}
Vue.createApp(divTitleMap).mount('#divTitleMap');

const divMenu = {
  data() {
    return {

    }
  },
  methods: {
    dashAtc : function()
    {
      renderPage('dasbor/beranda');
    }
  }
}
Vue.createApp(divMenu).mount('#divMenu');

// INISIALISASI 
renderPage('dasbor/beranda');

// FUNCTION 
function renderPage(halaman)
{
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

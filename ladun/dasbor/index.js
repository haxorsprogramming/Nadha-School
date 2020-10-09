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
      console.log("Haloo");
    }
  }
}
Vue.createApp(divMenu).mount('#divMenu');
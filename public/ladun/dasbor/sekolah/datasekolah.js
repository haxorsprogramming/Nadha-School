// VUE OBJECT 
var divDataSekolah = new Vue({
    el : '#divDataSekolah',
    data : {

    },
    methods : {
        editAtc : function(id)
        {
            console.log(id);
        }
    }
});
// INISIALISASI 
$('#tblDataSekolah').dataTable();
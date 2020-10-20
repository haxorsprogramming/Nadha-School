// ROUTE 
var rToGetDetailSekolah = server + 'sekolah/datasekolah/detail';

// VUE OBJECT 
var divDataSekolah = new Vue({
    el : '#divDataSekolah',
    data : {

    },
    methods : {
        editAtc : function(id)
        {
            let dataSend = {'id':id}
            $.post(rToGetDetailSekolah, dataSend, function(data){
                console.log(data);
            });
        }
    }
});
// INISIALISASI 
$('#tblDataSekolah').dataTable();
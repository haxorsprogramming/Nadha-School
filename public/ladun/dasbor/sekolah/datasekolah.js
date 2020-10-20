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
            $('.btnSide').addClass('disabled');
            progStart();
            $.post(rToGetDetailSekolah, dataSend, function(data){
                console.log(data);
                progStop();
            });
        }
    }
});
// INISIALISASI 
$('#tblDataSekolah').dataTable();
$('#divEditDataSekolah').hide();
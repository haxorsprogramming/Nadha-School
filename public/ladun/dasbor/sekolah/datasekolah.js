// ROUTE 
var rToGetDetailSekolah = server + 'sekolah/datasekolah/detail';
var rToUpdateDataSekolah = server + 'sekolah/datasekolah/update';
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
                progStop();
                console.log(data);
                $('#divEditDataSekolah').show();
                $('#divDataSekolah').hide();
                document.querySelector('#txtCaptionData').value = data.respon.caption;
            });
        }
    }
});

var divEditDataSekolah = new Vue({
    el : '#divEditDataSekolah',
    data : {

    },
    methods : {
        updateAtc : function()
        {
            let captionData = document.querySelector('#txtCaptionData').value;
            let dataSend = {'captionData':captionData}
            $.post(rToUpdateDataSekolah, dataSend, function(data){
                console.log(data);
            });
        }
    }
});

// INISIALISASI 
$('#tblDataSekolah').dataTable();
$('#divEditDataSekolah').hide();

// FUNCTION 
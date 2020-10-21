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
            divEditDataSekolah.kdData = id;
            $.post(rToGetDetailSekolah, dataSend, function(data){
                progStop();
                console.log(data);
                $('#divEditDataSekolah').show();
                $('#divDataSekolah').hide();
                document.querySelector('#txtCaptionData').value = data.respon.caption;
                document.querySelector('#txtNilaiData').value = data.respon.value;
            });
        }
    }
});

var divEditDataSekolah = new Vue({
    el : '#divEditDataSekolah',
    data : {
        kdData : ''
    },
    methods : {
        updateAtc : function()
        {
            let captionData = document.querySelector('#txtCaptionData').value;
            let kdData = this.kdData;
            let dataSend = {'captionData':captionData, 'kdData':kdData}
            console.log(dataSend);
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
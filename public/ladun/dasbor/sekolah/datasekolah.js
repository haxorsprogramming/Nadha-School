// ROUTE 
var rToGetDetailSekolah = server + "sekolah/datasekolah/detail";
var rToUpdateDataSekolah = server + "sekolah/datasekolah/update";
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
                $('#divEditDataSekolah').show();
                $('#divDataSekolah').hide();
                document.querySelector('#txtCaptionData').value = data.respon.caption;
                document.querySelector('#txtNilaiData').value = data.respon.value;
                document.querySelector('#txtDeks').value = data.respon.deks;
                document.querySelector('#txtNilaiData').focus();
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
            let nilaiData = document.querySelector('#txtNilaiData').value;
            let kdData = this.kdData;
            let dataSend = {'captionData':captionData, 'kdData':kdData, 'nilaiData':nilaiData}
            if(nilaiData === ''){
                pesanUmumApp('warning', 'Isi field!!', 'Harap isi semua field ... !!');
            }else{
                $('#divLoading').show();
                $('.btnPref').addClass('disabled');
                $.post(rToUpdateDataSekolah, dataSend, function(data){
                    pesanUmumApp('success', 'Sukses update ...', 'Data berhasil di update ...');
                    app.dataSekolahAtc();
                });
            }
        },
        kembaliAtc : function()
        {
            app.dataSekolahAtc();
        }
    }
});

// INISIALISASI 
$('#tblDataSekolah').dataTable();
$('#divEditDataSekolah').hide();
$('#divLoading').hide();

// FUNCTION 
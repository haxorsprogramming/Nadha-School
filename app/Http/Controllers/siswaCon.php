<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

// Import model 
use App\SiswaMdl;

// Import another controller 
use App\Http\Controllers\utilityCon;
use App\Http\Controllers\siswaHelpCon;

class siswaCon extends Controller
{

    protected $utilityCon;

    public function __construct(utilityCon $utilityCon, siswaHelpCon $siswaHelpCon)
    {
        $this -> utilityCon = $utilityCon;
        $this -> siswaHelpCon = $siswaHelpCon;
    }

    public function datasiswa()
    {   
        $provinsi       = DB::table('tbl_provinsi') -> get();
        $agama          = $this -> utilityCon -> getAgama();
        $golonganDarah  = $this -> utilityCon -> getGolonganDarah();
        $statusOrangTua = $this -> utilityCon -> getStatusOrangTua();

        $dr             =  ['provinsi' => $provinsi, 'agama' => $agama, 'golonganDarah' => $golonganDarah, 'statusOrangTua' => $statusOrangTua];
        return view('dasbor.siswa.siswa', $dr);
    }

    public function tambahdatasiswa(Request $request)
    {
        // get form data 
        $nisn           = $request -> txtNisn;
        $nis            = $request -> txtNis;
        $namaSiswa      = $request -> txtNamaSiswa;
        $tglLahir       = $request -> txtTanggalLahir;
        $agama          = $request -> txtAgama;
        $golDarah       = $request -> txtGolonganDarah;
        $alamatLhr      = $request -> txtAlamatLahir;
        $provLhr        = $request -> txtProvinsiLahir;
        $kabLhr         = $request -> txtKabupatenLahir;
        $kecLhr         = $request -> txtKecamatanLahir;
        $desLhr         = $request -> txtDesaLahir; 
        $alamat         = $request -> txtAlamatSiswa;
        $prov           = $request -> txtProvinsi;
        $kab            = $request -> txtKabupaten;
        $kec            = $request -> txtKecamatan;
        $des            = $request -> txtDesa;
        $email          = $request -> txtEmail;
        $hp             = $request -> txtNoHp;
        $wa             = $request -> txtWhatsapp;
        $statusOrtu     = $request -> txtStatusOrangTua;
        $ayah           = $request -> txtNamaAyah;
        $ibu            = $request -> txtNamaIbu;
        $wali           = $request -> txtNamaWali;
        $hpOrtu         = $request -> txtHpOrangTua;
        $alamatOrtu     = $request -> txtAlamatOrangTua;
        $tinggiBadan    = $request -> txtTinggiBadan;
        $beratBadan     = $request -> txtBeratBadan;
        $berkacamata    = $request -> txtBerkacamata;
        $butaWarna      = $request -> txtButaWarna;
        $asalSekolah    = $request -> txtAsalSekolah;
        $noIjazah       = $request -> txtNoIjazah;
        $statusMasuk    = $request -> txtStatusMasuk;
        $noTesMasuk     = $request -> txtNoTesMasuk;
        $tanggalMasuk   = $request -> txtTanggalMasuk;
        // foto 
        $foto           = $request -> file('txtFoto');
        $tipeFile       = $foto -> getClientOriginalExtension();
        $mime           = $foto -> getMimeType();
        $ukuranFile     = floor(($foto -> getSize() / 1024));
        $namaFile       = $nis.".".$tipeFile;
        $tujuan_upload  = 'ladun/file/foto_siswa/';
        // cek data siswa 
        $dataInti       = $this -> siswaHelpCon -> cekData($nis, $nisn, $email, $hp);
        // filter 
        if($mime == 'image/jpeg' || $tipeFile == 'jpg' || $tipeFile == 'jpeg')
        {
            if($ukuranFile < 2000){
                if($dataInti == 'data_valid'){
                    // save ke database 
                    DB::table('tbl_profil_siswa') -> insert([
                        'username' => $email, 'nis' => $nis, 'nisn' => $nisn, 'nama_lengkap' => $namaSiswa, 'jenis_kelamin' => 'L', 'tanggal_lahir' => $tglLahir,
                        'alamat_lahir' => $alamatLhr, 'desa_lahir' => $desLhr, 'kecamatan_lahir' => $kecLhr, 'kabupaten_lahir' => $kabLhr, 'provinsi_lahir' => $provLhr,
                        'alamat' => $alamat, 'desa' => $des, 'kecamatan' => $kec, 'kabupaten' => $kab, 'provinsi' => $prov, 'golongan_darah' => $golDarah, 'agama' => $agama,
                        'tinggi_badan' => $tinggiBadan, 'berat_badan' => $beratBadan, 'buta_warna' => $butaWarna, 'berkacamata' => $berkacamata, 'jurusan' => '-', 
                        'periode_masuk' => '-', 'angkatan' => '-', 'asal_sekolah' => $asalSekolah, 'no_tes_masuk' => $noTesMasuk, 'no_ijazah' => $noIjazah, 'status_masuk' => $statusMasuk,
                        'no_hp' => $hp, 'email' => $email, 'status_orang_tua' => $statusOrtu, 'ayah' => $ayah, 'ibu' => $ibu, 'wali' => $wali, 'alamat_orang_tua' => $alamatOrtu,
                        'no_hp_orang_tua' => $hpOrtu, 'foto_profil' => $namaFile
                    ]);
                    // upload foto 
                    $foto -> move($tujuan_upload, $namaFile);
                    $dr = ['status' => 'success_save_data'];
                }else{
                    $dr = ['status' => 'error_data_duplicate'];
                }
                
            }else{
                $dr = ['status' => 'error_file_size'];
            }
        }else{
            $dr = ['status' => 'error_file_type'];
        }
        // send response 
        return \Response::json($dr);
    }

    public function cekValidasi()
    {
        $cek = $this -> siswaHelpCon -> oper("aditia darma nst");
        echo $cek;
    }
}

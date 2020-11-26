<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


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
       
        $namaSiswa      = $request -> txtNamaSiswa;
        $nisn           = $request -> txtNisn;
        $nis            = $request -> txtNis;
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
        DB::table('tbl_profil_siswa') -> insert([
            'username' => $email, 'nis' => $nis, 'nisn' => $nisn, 'nama_lengkap' => $namaSiswa, 'jenis_kelamin' => 'L', 'tanggal_lahir' => $tglLahir,
            'alamat_lahir' => $alamatLhr, 'desa_lahir' => $desLhr, 'kecamatan_lahir' => $kecLhr, 'kabupaten_lahir' => $kabLhr, 'provinsi_lahir' => $provLhr,
            'alamat' => $alamat, 'desa' => $des, 'kecamatan' => $kec, 'kabupaten' => $kab, 'provinsi' => $prov, 'golongan_darah' => $golDarah, 'agama' => $agama,
            'tinggi_badan' => $tinggiBadan, 'berat_badan' => $beratBadan, 'buta_warna' => $butaWarna, 'berkacamata' => $berkacamata, 'jurusan' => '-', 
            'periode_masuk' => '-', 'angkatan' => '-', 'asal_sekolah' => $asalSekolah, 'no_tes_masuk' => $noTesMasuk, 'no_ijazah' => $noIjazah, 'status_masuk' => $statusMasuk,
            'no_hp' => $hp, 'email' => $email, 'status_orang_tua' => $statusOrtu, 'ayah' => $ayah, 'ibu' => $ibu, 'wali' => $wali, 'alamat_orang_tua' => $alamatOrtu,
            'no_hp_orang_tua' => $hpOrtu
        ]);
        $foto = $request -> file('txtFoto');
        $tujuan_upload = 'ladun/file/foto_siswa';
        $foto -> move($tujuan_upload, $foto -> getClientOriginalName());
        $dr = ['status' => $nis];
        return \Response::json($dr);
    }

    public function cekValidasi()
    {
        $cek = $this -> siswaHelpCon -> oper("aditia darma nst");
        echo $cek;
    }
}

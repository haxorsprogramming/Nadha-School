<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use DataTables;

// Import model 
use App\SiswaMdl;

// Import another controller 
use App\Http\Controllers\utilityCon;
use App\Http\Controllers\siswaHelpCon;
use App\Http\Controllers\daerahCon;

class siswaCon extends Controller
{

    protected $utilityCon;

    public function __construct(utilityCon $utilityCon, siswaHelpCon $siswaHelpCon, daerahCon $daerahCon)
    {
        $this -> utilityCon = $utilityCon;
        $this -> siswaHelpCon = $siswaHelpCon;
        $this -> daerahCon = $daerahCon;
    }

    public function getDataSiswa(Request $request)
    {
        $requestData = $request;
        $columns = array(0 => 'nama', 1 => 'alamat', 2 => 'no_hp', 3 => 'last_visit');
        $dataSiswa = SiswaMdl::skip($requestData['start']) -> take($requestData['length']) -> get();
        $totalSiswa = SiswaMdl::count();

        $data = array();

        foreach($dataSiswa as $ds){
            $nested = array();
            $nested[] = $ds['nis'];
            $nested[] = $ds['nama_lengkap'];
            $nested[] = "Komputer";
            $nested[] = "XII";
            $nested[] = "<a href='#!' class='btn btn-primary btn-sm btn-icon icon-left btnDetail' data-id='".$ds['nis']."'><i class='fas fa-search-plus'></i></a>";
            $data[] = $nested;
        }

        $json_data = array(
            "draw"            => intval( $requestData['draw'] ),  
            "recordsTotal"    => intval( $totalSiswa ), 
            "recordsFiltered" => intval( $totalSiswa ), 
            "data"            => $data 
        );

        return \Response::json($json_data);

    }

    public function datasiswa()
    {   
        $provinsi = DB::table('tbl_provinsi') -> get();
        $agama = $this -> utilityCon -> get_agama();
        $golongan_darah = $this -> utilityCon -> get_golongan_darah();
        $status_orang_tua = $this -> utilityCon -> get_status_orang_tua();
        $siswa = SiswaMdl::all();

        $dr = ['provinsi' => $provinsi, 'agama' => $agama, 'golonganDarah' => $golongan_darah, 'statusOrangTua' => $status_orang_tua, 'siswa' => $siswa];
        return view('dasbor.siswa.siswa', $dr);
    }

    public function tambahdatasiswa(Request $request)
    {
        // get form data 
        $nisn           = $request -> txtNisn;
        $nis            = $request -> txtNis;
        $email          = $request -> txtEmail;
        $hp             = $request -> txtNoHp;
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
                        'username' => $email, 
                        'nis' => $nis, 
                        'nisn' => $nisn, 
                        'nama_lengkap' => $request -> txtNamaSiswa, 
                        'jenis_kelamin' => $request -> txtJenisKelamin, 
                        'tanggal_lahir' => $request -> txtTanggalLahir,
                        'alamat_lahir' => $request -> txtAlamatLahir,
                        'desa_lahir' => $request -> txtDesaLahir, 
                        'kecamatan_lahir' => $request -> txtKecamatanLahir, 
                        'kabupaten_lahir' => $request -> txtKabupatenLahir, 
                        'provinsi_lahir' => $request -> txtProvinsiLahir,
                        'alamat' => $request -> txtAlamatSiswa, 
                        'desa' => $request -> txtDesa, 
                        'kecamatan' => $request -> txtKecamatan, 
                        'kabupaten' => $request -> txtKabupaten, 
                        'provinsi' => $request -> txtProvinsi, 
                        'golongan_darah' => $request -> txtGolonganDarah, 
                        'agama' => $request -> txtAgama,
                        'tinggi_badan' => $request -> txtTinggiBadan, 
                        'berat_badan' => $request -> txtBeratBadan, 
                        'buta_warna' => $request -> txtButaWarna, 
                        'berkacamata' => $request -> txtBerkacamata, 
                        'jurusan' => '-', 
                        'periode_masuk' => '-', 
                        'angkatan' => '-', 
                        'asal_sekolah' => $request -> txtAsalSekolah, 
                        'no_tes_masuk' => $request -> txtNoTesMasuk, 
                        'no_ijazah' => $request -> txtNoIjazah, 
                        'status_masuk' => $request -> txtStatusMasuk,
                        'no_hp' => $hp, 
                        'email' => $email, 
                        'status_orang_tua' => $request -> txtStatusOrangTua, 
                        'ayah' => $request -> txtNamaAyah, 
                        'ibu' => $request -> txtNamaIbu, 
                        'wali' => $request -> txtNamaWali, 
                        'alamat_orang_tua' => $request -> txtAlamatOrangTua,
                        'no_hp_orang_tua' => $request -> txtHpOrangTua, 
                        'foto_profil' => $namaFile
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

    public function detailsiswa($nis)
    {
        $siswa = SiswaMdl::where('nis', $nis) -> first();
        $desa_lahir = $this -> daerahCon -> getnamadesa($siswa -> desa_lahir);
        $kabupaten_lahir = $this -> daerahCon -> getnamakabupaten($siswa -> kabupaten_lahir);
        $dr = ['nis' => $nis, 'siswa' => $siswa, 'desa_lahir' => $desa_lahir, 'kabupaten_lahir' => 'iree'];

        return view('dasbor.siswa.detailsiswa', $dr);
    }

    public function cekValidasi()
    {
        $cek = $this -> siswaHelpCon -> oper("aditia darma nst");
        echo $cek;
    }
}

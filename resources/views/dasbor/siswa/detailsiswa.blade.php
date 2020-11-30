<?php  
$namaSiswa = $siswa -> nama_lengkap;
$bahan = explode(" ", $namaSiswa);
$tanggal_lahir = date("j F Y", strtotime($siswa -> tanggal_lahir));
$namaDepan = $bahan[0];
?>
<div class="row">

    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
        <div class="card card-primary" id="divDetailSiswa">
            <div class="card-header">
                <h6>Profil Siswa</h6>
            </div>
            <div class="card-body">
                <div class="card profile-widget">
                    <div class="profile-widget-header">
                        <img alt="image" src="{{ asset('ladun/file/foto_siswa/'.$siswa -> foto_profil) }}" class="rounded-circle profile-widget-picture">
                        <div class="profile-widget-items">
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Posts</div>
                                <div class="profile-widget-item-value">187</div>
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Followers</div>
                                <div class="profile-widget-item-value">6,8K</div>
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Following</div>
                                <div class="profile-widget-item-value">2,1K</div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="profile-widget-name"><h3><strong>{{ $siswa -> nama_lengkap }}</strong></h3> 
                        <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> {{ $siswa -> email }}</div>
                    </div>
                    <div>
                        {{ $namaDepan }}, lahir di {{ $desa_lahir -> nama }} - {{kabupaten_lahir -> nama}}, pada {{ $tanggal_lahir }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
        <div class="card card-primary" id="divDetailSiswa">
            <div class="card-header">
                <h6>Aktivitas terbaru</h6>
            </div>
        </div>
    </div>
    
    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
        <div class="card card-primary" id="divDetailSiswa">
            <div class="card-header">
                <h6>Statistik</h6>
            </div>
        </div>
    </div>

</div>
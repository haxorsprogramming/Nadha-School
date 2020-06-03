<?php
$rankPelanggan = $data['qRankPelanggan'];
//buat range tanggal 
$waktuNow = date('Y-m-d');
$mingguDepan = date('Y-m-d', strtotime($waktuNow. ' - 7 days'));
$rentangSeminggu = $this -> jarakTanggal($mingguDepan, $waktuNow);
$dibalik = array_reverse($rentangSeminggu);
?>
<div id='divBeranda'>
<div>
<!-- Statistik Bar -->
<div class='row'>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-nadha-primary">
          <i class="fas fa-water"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
      <h3 id='capTotalUji'>{{jlhCucian}}</h3>
            <h4>Siswa</h4>
          </div>
          <div class="card-body">

          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-nadha-primary">
          <i class="fas fa-users"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
          <h3 id='capTotalGejala'>{{jlhPelanggan}}</h3>
            <h4>Guru & Pegawai</h4>
          </div>
          <div class="card-body">

          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-nadha-primary">
          <i class="	fas fa-chart-line"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
        <h3 id='capTotalGejala'></h3>
            <h4>Jam Pelajaran</h4>
          </div>
          <div class="card-body">

          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-nadha-primary">
          <i class="fas fa-donate"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
          <h3 id='capTotalUji'></h3>
            <h4>Kehadiran Siswa</h4>
          </div>
          <div class="card-body">

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
<!-- Card layanan / service terlaris  -->
  <div class='row'>
  <div class="col-lg-6 col-md-6 col-12">
              <div class="card card-warning">
                <div class="card-header">
                  <h4>Rekap transksi laundry seminggu terakhir</h4>
                  <div class="card-header-action">
                    <a href="#!" class="btn btn-primary">Detail</a>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-hover table-bordered">
                      <tr>
                        <th>Tanggal</th><th>Transaksi</th><th>Nominal</th>
                      </tr>
                     
                  </table>
                </div>
              </div>
        </div>
        <!-- Pelanggan teraktif -->
        <div class="col-lg-6 col-md-6 col-12">
        <div class="card card-warning">
                <div class="card-header">
                  <h4 class="d-inline">Ranking Pelanggan</h4>
                  <div class="card-header-action">
                    <a href="#!" class="btn btn-primary">Semua</a>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled list-unstyled-border">
                   
                  </ul>
                </div>
              </div>
        </div>
</div>
</div>
<script src="<?=STYLEBASE; ?>/dasbor/beranda.js"></script>

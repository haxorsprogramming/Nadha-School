<div class="menu" id='divMenu'>
        <div class="main-menu">
            <div class="">
                <ul class="list-unstyled">
                    <li>
                        <a href="JavaScript:void(0)" @click="dashboardAtc">
                        <i class="material-icons md-48">dashboard</i>
                            <span>Dashboards</span>
                        </a>
                    </li>
                    <li>
                        <a href="#dataMaster">
                        <i class="material-icons md-48">fact_check</i>Data Master
                        </a>
                    </li>
                    <li>
                        <a href="#aktivitas">
                        <i class="material-icons md-48">home_work</i>Aktivitas
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <!-- DATA MASTER  -->
                <ul class="list-unstyled" data-link="dataMaster" id="dataMaster">
                    <!-- SISWA  -->
                    <li>
                        <a href="#!" data-toggle="collapse" data-target="#siswaCollapse" aria-expanded="false"
                            aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50 collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Siswa</span>
                        </a>
                        <div id="siswaCollapse" class="collapse">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#!" @click="daftarSiswaAtc">
                                    <i class="material-icons md-48">person</i>  <span
                                            class="d-inline-block">Daftar Siswa</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                    <i class="material-icons md-48">person_add</i> 
                                        <span class="d-inline-block">Tambah Siswa</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ROMBEL  -->
                    <li>
                        <a href="#!" data-toggle="collapse" data-target="#rombelCollapse" aria-expanded="false"
                            aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50 collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Rombongan Belajar (Kelas)</span>
                        </a>
                        <div id="rombelCollapse" class="collapse">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#!" @click="daftarSiswaAtc">
                                    <i class="material-icons md-48">person</i>  <span
                                            class="d-inline-block">Daftar Rombel</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                    <i class="material-icons md-48">person_add</i> 
                                        <span class="d-inline-block">Tambah Rombel</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- ROMBEL  -->
                    <li>
                        <a href="#!" data-toggle="collapse" data-target="#tahunAjaranCollapse" aria-expanded="false"
                            aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50 collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Tahun Ajaran</span>
                        </a>
                        <div id="tahunAjaranCollapse" class="collapse">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#!" @click="daftarSiswaAtc">
                                    <i class="material-icons md-48">person</i>  <span
                                            class="d-inline-block">Daftar Rombel</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                    <i class="material-icons md-48">person_add</i> 
                                        <span class="d-inline-block">Tambah Rombel</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
                <!-- AKTIVITAS  -->
                <ul class="list-unstyled" data-link="aktivitas" id="aktivitas">
                    <li>
                        <a href="#!" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="false"
                            aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50 collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Mata Pelajaran</span>
                        </a>
                        <div id="collapseAuthorization" class="collapse">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#!" @click="daftarSiswaAtc">
                                    <i class="material-icons md-48">person</i>  <span
                                            class="d-inline-block">Daftar Siswa</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                    <i class="material-icons md-48">person_add</i> 
                                        <span class="d-inline-block">Tambah Siswa</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

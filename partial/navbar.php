<?php
include 'conn.php';
session_start();
?>
<div class="wrap">


</div>
<header role="banner">
    <?php
    if (empty($_SESSION['admin'])) {


    ?>

        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu" style="background-color: lavender">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="colorlib-logo"><a href="index.php"><img style="width:300px" ; height:100px" src="sekolah1.png" alt=""></a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li class="active"><a href="index.php">Home</a></li>
                                <li class="has-dropdown">
                                    <a href="#">Profile</a>
                                    <ul class="dropdown">
                                        <li><a href="index.php?page=sejarah">Sejarah Singkat</a></li>
                                        <li><a href="index.php?page=visimisi">Visi Misi</a></li>
                                        <li><a href="index.php?page=sarana">Sarana Prasarana</a></li>
                                        <li><a href="index.php?page=kepsek">Kepala Sekolah</a></li>
                                        <li><a href="index.php?page=proses">Proses Belajar Mengajar</a></li>
                                    </ul>
                                </li>


                                <li class="has-dropdown">
                                    <a href="#">Jurusan</a>
                                    <ul class="dropdown">
                                        <li><a href="index.php?page=rpl">Rekayasa Perangkat Lunak</a></li>
                                        <li><a href="index.php?page=tkj">Teknik Komputer Jaringan</a></li>
                                        <li><a href="index.php?page=upw">Usaha Perjalanan Wisata</a></li>
                                        <li><a href="index.php?page=otkp">Otomatisasi dan Tata Kelola Perkantoran</a></li>
                                        <li><a href="index.php?page=akutansi">Akuntansi dan Keuangan Lembaga</a></li>
                                        <li><a href="index.php?page=bisnis">Bisnis Daringan dan Pemasaran</a></li>
                                    </ul>
                                </li>


                                <li><a href="index.php?page=berita">berita</a></li>
                                <li><a href="index.php?page=pengumuman">pengumuman</a></li>
                                <li><a href="index.php?page=guru">guru</a></li>
                                <li><a href="index.php?page=galeri">galeri</a></li>

                                <li><a href="index.php?page=pendaftaran"><span></span>Pendaftaran</a></li>
                                <li><a href="index.php?page=login"><span></span>Login</a></li>
                                <i class="fa fa-sign-in" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
</header>
<?php
    } else {
?>
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu" style="background-color: lightblue">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="colorlib-logo"><a href="index.php"><img style="width:300px" ; height:100px" src="sekolah1.png" alt=""></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="index.php">Home</a></li>
                            <li class="has-dropdown">
                                <a href="#">Profile</a>
                                <ul class="dropdown">
                                    <li><a href="index.php?page=sejarah">Sejarah Singkat</a></li>
                                    <li><a href="index.php?page=visimisi">Visi Misi</a></li>
                                    <li><a href="index.php?page=sarana">Sarana Prasarana</a></li>
                                    <li><a href="index.php?page=kepsek">Kepala Sekolah</a></li>
                                    <li><a href="index.php?page=proses">Proses Belajar Mengajar</a></li>
                                </ul>
                            </li>


                            <li class="has-dropdown">
                                <a href="#">Jurusan</a>
                                <ul class="dropdown">
                                    <li><a href="index.php?page=rpl">Rekayasa Perangkat Lunak</a></li>
                                    <li><a href="index.php?page=tkj">Teknik Komputer Jaringan</a></li>
                                    <li><a href="index.php?page=upw">Usaha Perjalanan Wisata</a></li>
                                    <li><a href="index.php?page=otkp">Otomatisasi dan Tata Kelola Perkantoran</a></li>
                                    <li><a href="index.php?page=akutansi">Akuntansi dan Keuangan Lembaga</a></li>
                                    <li><a href="index.php?page=bisnis">Bisnis Daringan dan Pemasaran</a></li>
                                </ul>
                            </li>


                            <li><a href="index.php?page=berita">berita</a></li>
                            <li><a href="index.php?page=pengumuman">pengumuman</a></li>
                            <li><a href="index.php?page=guru">guru</a></li>
                            <li><a href="index.php?page=galeri">galeri</a></li>

                            <li><a href="index.php?page=pendaftaran"><span></span>Pendaftaran</a></li>
                            <li><a href="index.php?page=logout"><span></span>Logout</a></li>
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    </header>
<?php } ?>
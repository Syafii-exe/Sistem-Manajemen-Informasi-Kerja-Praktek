<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Kerja Praktek Teknik Sipil</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body>
    <!--============================= HEADER =============================-->
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                    
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('daftar');?>">Mahasiswa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman');?>">Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda');?>">Agenda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('download');?>">Download</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('Dokumentasi');?>">Dokumentasi</a>
                                </li>
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div>
<section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url().'theme/images/mahasiswa_2.jpg'?>" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Bepikir Kreaftif &amp; Inovatif</h1>
                            <h4>Bagi kami kreativitas merupakan gerbang masa depan.<br> kreativitas akan mendorong inovasi. <br> Itulah yang kami lakukan.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//END HEADER -->
<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <p><strong>A.&nbsp;Definisi Umum</strong>
                <br />Matakuliah ini bertujuan memberikan kesempatan kepada para mahasiswa untuk memperoleh pengalaman praktik kerja di sebuah instansi teknologi maupun non-teknologi (dalam bidang/divisi/departemen IT) dan mengalami langsung suasana kerja dengan menerapkan ilmu yang telah diperoleh selama masa perkuliahan.</p>
            <p><strong>B.&nbsp;Prasyarat</strong>
                <br />Mahasiswa yang mengajukan pendaftaran pelaksanaan kerja praktik harus memenuhi persyaratan utama sebagai berikut :<br />•&nbsp;Mahasiswa Program Studi Teknik Informatika ITERA pada Semester 5 (telah mengambil 70 sks);<br />•&nbsp;Akan mengambil mata-kuliah Kerja Praktik dalam KRS pada Semester 6.</p>
            <p><strong>C.&nbsp;Pembimbing KP</strong>
                 <br />Pembimbing KP mahasiswa ditentukan&nbsp; oleh Koordinator KP melalui diskusi dengan Para Dosen Teknik Informatika. Mahasiswa yang melaksanakan KP dipersilahkan memberi masukan kepada Koordinator KP apabila memiliki pilihan Pembimbing KP-nya sendiri.</p>
            <p><strong>D.&nbsp;Waktu dan Tempat Pelaksanaan KP</strong>
                <br />Waktu pelaksanaan KP disarankan pada jeda libur semester genap ke semester ganjil. Pelaksanaan KP diluar dari jadwal yang disarankan kemungkinan akan mengalami permasalahan dalam presensi kuliah&nbsp; jika beriringan dengan jadwal kuliah. Pelaksanaan KP memiliki durasi sekurang-kurangnya 25 hari kerja tatap muka dan dibuktikan dengan pengesahan Form KP-2 oleh pimpinan yang berwenang di instansi kerja. Kerja Praktik dilaksanakan di tempat dimana mahasiswa merasakan pengalaman bekerja dan situasi lingkungan kerja nyata. Oleh karena itu KP tidak diperkenankan dilaksanakan dalam lingkungan kerja jarak jauh (remote access). KP juga mengusung aspek integritas dan profesionalisme sehingga instansi tempat pelaksanaan KP harus layak untuk menjadi tempat bekerja bagi mahasiswa sesuai dengan bidang dan keahlian yang dimiliki. Koordinator dan Dosen Pembimbing KP berhak menolak pengajuan KP apabila dirasa tidak sesuai dalam aspek waktu dan tempat pelaksanaan.</p>
            <p><strong>E.&nbsp;Pendaftaran KP</strong>
                <br />Pendaftaran KP dapat dilakukan sepanjang Semester 5 berlangsung dengan mengisi Form KP-1 lalu mencetaknya (disarankan tidak menggunakan tulisan tangan) dan diserahkan kepada Bagian Administrasi program studi.</p>
            <p><strong>F.&nbsp;Proses Pelaksanaan KP</strong>
                <br />Dalam proses pelaksanaan KP, mahasiswa harus mengikuti beberapa pedoman sebagai berikut :<br />
                •&nbsp;Menaati segala peraturan dan ketentuan yang ada pada instansi kerja;<br />
                •&nbsp;Menjaga etika dan wibawa sebagai pekerja;<br />
                •&nbsp;Bersikap profesional dan menunjukkan etos kerja yang baik;<br />
                •&nbsp;Tidak melakukan perbuatan curang maupun melanggar hukum yang berlaku;<br />
                •&nbsp;Mendokumentasikan kegiatan harian baik di dalam kantor maupun ketika berada di lapangan. Dokumentasi berbentuk catatan harian yang bersifat logsheet pada Form KP-2, juga dokumentasi visual berupa foto dan video;<br />
                •&nbsp;Menjaga nama baik Institut Teknologi Sumatera dalam hal perbuatan dan tutur kata.</p>
            <p><strong>G. Kewajiban Setelah Pelaksanaan KP</strong>
                <br />1. Mahasiswa diwajibkan membuat laporan KP dan menyerahkan draft pertama kepada Pembimbing KP segera setelah pelaksanaan KP berakhir.</p>
                <p>2. Mahasiswa diwajibkan mendaftar Seminar KP selambat-lambatnya 30 hari setelah pelaksanaan KP berakhir dengan melampirkan :
                    <br />• Laporan KP final yang sudah disetujui oleh Pembimbing KP;
                    <br />• Form Presensi dan Logsheet KP-2 yang sudah ditandatangani oleh atasan di instansi kerja yang dibubuhi cap;
                    <br />• Foto kopi KRS semester 6 yang tercantum mata kuliah Kerja Praktik.</p>
                <p>3. Mahasiswa diwajibkan mengirim dokumentasi KP kepada Koordinator KP. Dokumentasi ini meliputi :<br />
                    •<span style="display: inline !important; float: none; background-color: transparent; color: #32373c; font-family: Noto Serif,serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 28.8px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"> </span>Catatan Logsheet (Form KP-2) yang berisi aktivitas harian yang dilakukan;
                    <br />• Beberapa foto / video kegiatan
                    <br />• Minimal 1 buah foto bersama dengan atasan/pegawai/karyawan yang ada di instansi KP. (Disarankan untuk berfoto di lokasi landmark perusahaan)
                    <br />Berkas diatas dikirim melalui email : informatika@itera.ac.id dengan subjek  KERJAPRAKTIK_NIM. Diperbolehkan mengunggah berkas di atas menggunakan cloud drive dan mengirimkan tautan dari drive penyimpanan melalui email.</p>
                <p>4. Mahasiswa yang melanggar batas waktu penyelesaian Laporan dan pendaftaran Seminar akan dikenakan sanksi berupa penurunan nilai sebanyak 1 grade setiap bulan (maksimal penurunan nilai sampai C).</p>
                <p>5. Mahasiswa wajib menyerahkan Laporan KP yang telah dijilid <em>hardcover</em> paling lambat 1 minggu setelah pelaksanaan Seminar KP. Keterlambatan pengumpulan akan dikenakan sanksi penurunan nilai 1 grade setiap minggu (tidak ada batas penurunan nilai).</p>

                <p>
                    <a href="http://if.itera.ac.id/wp-content/uploads/2019/02/Form-Pendaftaran-KP.docx">Download Form Pendaftaran Kerja Praktik</a><br />
                    <a href="http://if.itera.ac.id/wp-content/uploads/2018/10/Form-Presensi-dan-Log-Sheet-KP-IF.docx">Download Form Presensi dan Log Sheet Kerja Praktik</a><br />
                    <a href="http://if.itera.ac.id/wp-content/uploads/2019/01/Form-Penilaian-Instansi-KP.docx">Download Form Penilaian Instansi KP</a><br />
                    <a href="http://if.itera.ac.id/wp-content/uploads/2019/01/Form-Pendaftaran-Seminar-KP-IF.docx">Download Form Pendaftaran Seminar Kerja Praktik</a><br />
                    <a href="http://if.itera.ac.id/wp-content/uploads/2018/12/Template-Laporan-KP.pdf">Download Template Laporan KP</a></p>
            </div>
        </div>
    </div>
</section>
<!--//END DETAILED CHART -->
<!--============================= FOOTER =============================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                 
                    
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url();?>">Home</a></li>
                            <li><a href="<?php echo site_url('about');?>">About</a></li>
                            <li><a href="<?php echo site_url('artikel');?>">Blog </a></li>
                            <li><a href="<?php echo site_url('galeri');?>">Gallery</a></li>
                            <li><a href="<?php echo site_url('contact');?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="sitemap">
                      <h3>Akademik</h3>
                      <ul>
                          <li><a href="<?php echo site_url('guru');?>">Guru</a></li>
                          <li><a href="<?php echo site_url('siswa');?>">Siswa </a></li>
                          <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                          <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                          <li><a href="<?php echo site_url('download');?>">Download</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span>Jalan Terusan Ryacudu, Way Hui, Jati Agung, Way Huwi, Jati Agung, Kabupaten Lampung Selatan, Lampung 35365</p>
                        <p>Email :  
                            <br> Phone :  </p>
                            <ul class="footer-social-icons">
                                <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--//END FOOTER -->
        <!-- jQuery, Bootstrap JS. -->
        <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
        <!-- Plugins -->
        <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <!-- Subscribe -->
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
    </body>

    </html>

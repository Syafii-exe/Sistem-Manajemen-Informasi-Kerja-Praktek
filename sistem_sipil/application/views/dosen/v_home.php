<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Kerja Praktek Teknik Sipil</title>
    <link rel="shorcut icon" href="<?php echo base_url().'assets/baru/logo.png'?>">
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
                    
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                            <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('');?>">Home</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('dosen/siswa');?>">Mahasiswa</a>
                              </li>
                            
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('dosen/pengumuman');?>">Pengumuman</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('dosen/agenda');?>">Agenda</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('dosen/download');?>">Download/Upload</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('dosen/galeri');?>">Dokumentasi</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('dosen/contact');?>">Login</a>
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
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url().'assets/baru/slider3.jpg'?>" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Visi</h1>
                            <h4>Menjadi Program studi yang unggul
                                dan mandiri dalma penyelenggaraan
                                pendidikan, penelitian, dan pengabdian kepada masyrakat
                                dibidang Teknik Sipil serta menjawab 
                                kebutuhan bangsa dan negara akan sarjana bidang Rekayasa Sipil diwilayah Pulau Sumatera dan sekitarnya
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'assets/baru/slider_1.jpg'?>" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Misi</h1>
                            <h4>    1. Menyelenggarakan Pendidikan sarjana dibidang Teknik Sipil melalui proses pembelajaran yang berkualitas tinggi dan efisien.<br>
                                    2. Menyelenggaran kegiatan penelitian dan pengembangan dibidang Teknik Sipil yang bermanfaat bagi perkembangan ilmu pengetahuan dan peningkatan kesejahteraan masyarakat diwilayah Pulau Sumatera khususnya.<br>
                                    3. Menyelenggarakan kegiatan pengabdian kepada masyarakat dibidang Teknik Sipil melalui kerja sama dengan institusi lain, baik dengan instansi pemerintah maupun swasta yang dapat memberikan kontribusi bagi tumbuhnya wirausaha berbasis ilmu pengetahuan sains dan teknologi untuk mengembangkan sumber daya ekonomi wilayah dan kesejahteraan.
                            <div class="slider-btn">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'assets/baru/slider_2.jpg'?>" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Sistem Informasi Teknik Sipil</h1>
                            <h4>Teknik Sipil itu sendiri merupakan suatu keilmuan yang mencakup teknologi merancang, membangun, memelihara, dan mengelola fasilitas sarana dan prasarana sipil seperti rumah tinggal, gedung bertingkat, jaringan jalan, jembatan, saluran drainase, bandara, pelabuhan, dan lain sebagainya.</h4>
                            <div class="slider-btn">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
 <!--//END  ABOUT IMAGE -->
    <!--============================= FOOTER =============================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="foot-logo">
                        <a href="<?php echo site_url();?>">
                            <img src="<?php echo base_url().'assets/baru/logo.png'?>" class="img-fluid" alt="footer_logo">
                        </a>
                        <p><?php echo date('Y');?> © copyright by Teknik Sipil Institut Teknologi Sumatera</a>. <br>All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sitemap">
                            <h3>Menu Utama</h3>
                            <ul>
                                <li><a href="<?php echo site_url();?>">Home</a></li>
                            <li><a href="<?php echo site_url('galeri');?>">Dokumentasi</a></li>
                            
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                      <div class="sitemap">
                          <h3>Akademik</h3>
                          <ul>
                              <li><a href="<?php echo site_url('siswa');?>">Mahasiswa </a></li>
                              <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                              <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                              <li><a href="<?php echo site_url('download');?>">Download/Upload</a></li>
                          </ul>
                      </div>
                    </div>
                    <div class="col-md-3">
                        <div class="address">
                            <h3>Hubungi Kami</h3>
                            <p><span>Alamat: </span>Jalan Terusan Ryacudu, Way Hui, Jati Agung, Way Huwi, Jati Agung, Kabupaten Lampung Selatan, Lampung 35365</p>
                            <p> No Telepon : (+62) 721 8030188
                                No Faksimili : (+62) 721 8030189
                                Homepage : http://si.itera.ac.id
                                E-mail : tekniksipil@itera.ac.id
                                
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
            <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
            <!-- Subscribe / Contact-->
            <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/contact.js'?>"></script>
            <!-- Script JS -->
            <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
        </body>

        </html>

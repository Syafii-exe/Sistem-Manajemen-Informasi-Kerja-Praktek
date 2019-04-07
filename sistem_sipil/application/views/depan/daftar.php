<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Daftar Kerja Praktek</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link  rel="stylesheet" href="<?php echo base_url().'theme/css/main.css'?>" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Pendaftaran Kerja Praktek Mahasiswa Teknik Sipil </h2>
                    <h2 class="title">Institut Teknologi Sumatera </h2>
                </div>

            <div class="card-body">
            <form class="form-horizontal" action="<?php echo base_url().'Daftar/simpan_siswa'?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">

            <div class="form-row">
                <label for="inputUserName" class="name">NIM</label>
                    <div class="input--style-6">
                        <input type="text" name="xnim" class="form-control" id="inputUserName" placeholder="NIM" required>
                    </div>
            </div>

            <div class="form-row">
                <label for="inputUserName" class="name">Nama</label>
                    <div class="input--style-6">
                        <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama" required>
                    </div>
            </div>

            <div class="form-row">
                <label for="inputUserName" class="name">Alamat</label>
                    <div class="input--style-6">
                        <input type="text" name="xalamat" class="form-control" id="inputUserName" placeholder="Alamat" required>
                    </div>
            </div>

            <div class="form-row">
                <label for="inputUserName" class="name">Jenis Kelamin</label>
                    <div class="input--style-6">
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                <label for="inlineRadio1"> Laki-Laki </label>
                        </div>
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                    <label for="inlineRadio2"> Perempuan </label>

                       </div>
                    </div>
            </div>

            <div class="form-row">
                <label for="inputUserName" class="name">Kontak Person</label>
                    <div class="input--style-6">
                        <input type="text" name="xkontak" class="form-control" id="inputUserName" placeholder="Kontak" required>
                    </div>
            </div>

            <div class="form-row">
                <label for="inputUserName" class="name">Photo</label>
                    <div class="input--style-6">
                        <input type="file" name="filefoto"/>
                    </div>
            </div>

            <div class="form-row">
                            <div class="name">Upload Berkas Kerja Praktek</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">file. Max file size 50 MB
                                </div>
                            </div>
                        </div>

            </div>
            <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">Send Application</button>
            </div>
        </form> 
</div>
</div>
</div>
</div>
    <!-- Jquery JS-->
    <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>


    <!-- Main JS-->
    <script src="<?php echo base_url().'theme/js/global.js'?>"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
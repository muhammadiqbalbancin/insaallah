<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rundeng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <style media="screen">
        .h{
            text-align:right;
        }
    </style>
</head>

<body>

<section id="newsletter">
    <div class="container">
        <div class="col-md-12">
            <h1><span class="orange">Data</span> Wilayah</h1>
        </div>
    </div>
</section>

<section id="wdesaPertama">
    <div class="col-md-12 col-sm-12">
        <div id="wdesa1">
            <div class="panel-group" id="accordion">
                <div class="panel">
                    <div class="panel-heading warna1">
                        <h4>
                            <a data-toggle="collapse" data-parent="#accordion" href="#desa14"><span class="warna1Header">Panglima Saman</span></a>
                        </h4>
                    </div>
                    <div id="desa14" class="panel-collapse collapse">
                        <div class="panel-body">
                            <h3>Selamat Datang di Desa Panglima Saman</h3>
                            <p>
                                <b>Panglima Saman</b> merupakan salah satu satu kampong yang ada di
                                kecamatan Rundeng, kota Subulussalam, provinsi Aceh, Indonesia,
                                kode pos 24782. Hasil pertanian utama di desa ini ialah padi, jagung,
                                kakao, dan kelapa dan sawit.
                            </p>
                            <br>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr class="info">
                                        <th>Point</th>
                                        <th>Nilai</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Jumlah Penduduk</td>
                                        <td class="h"><?php
                                            require_once ('../lib/Dbcon2.php');
                                            $q="SELECT COUNT(jk) as  jklk FROM datapenduduk where kelurahan = 'Kampong Panglima Saman'";
                                            $hasil=mysqli_query($con,$q);
                                            $hasil2= $hasil->fetch_assoc()?>
                                            <?= $hasil2['jklk'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Laki - laki</td>
                                        <td class="h"><?php
                                            require_once ('../lib/Dbcon.php');
                                            $q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Panglima Saman'";
                                            $hasil=mysqli_query($con,$q);
                                            $hasil2= $hasil->fetch_assoc()?>
                                            <?= $hasil2['jklk'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Perempuan</td>
                                        <td class="h"><?php
                                            require_once ('../lib/Dbcon2.php');
                                            $q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Panglima Saman'";
                                            $hasil=mysqli_query($con,$q);
                                            $hasil2= $hasil->fetch_assoc()?>
                                            <?= $hasil2['jklk'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Sudah Kawin</td>
                                        <td class="h"><?php
                                            require_once ('../lib/Dbcon.php');
                                            $q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Panglima Saman'";
                                            $hasil=mysqli_query($con,$q);
                                            $hasil2= $hasil->fetch_assoc()?>
                                            <?= $hasil2['a'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Belum Kawin</td>
                                        <td class="h"><?php
                                            require_once ('../lib/Dbcon.php');
                                            $q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'AND kelurahan = 'Kampong Panglima Saman'";
                                            $hasil=mysqli_query($con,$q);
                                            $hasil2= $hasil->fetch_assoc()?>
                                            <?= $hasil2['a'];?></td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>

                            <section class="section-map">
                                <iframe src="https://www.google.com/maps/embed/v1/place?q=desa%20Panglima%20Saman%20kecamatan%20subulussalam&key=AIzaSyCNgYsIfEB9n4qj9-2sLwTdZPsGaZTTRxc" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </section>


                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    </div>

</section>



<br>
<br>
</body>
</html>

<?php
/*Rundeng Created by PhpStorm.
 * User: Galih
 * Date: 12/8/2017
 * Time: 8:00 PM
 */
require_once ('../lib/Dbcon.php');
require_once ('../lib/Dbcon2.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../asset/css/menu.css">
    <link rel="stylesheet" href="../asset/bootstrap/css/w3.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/bantu1.css">
    <script src="../asset/js/bantu1.js"></script>
    <script src="../asset/bootstrap/js/bootstrap.min.js"></script>
    <title>Dashboard Administrator Rundeng</title>
    <style>
        .right {
           text-align:right;
        }
    </style>
</head>

<body>
    <div>
        
        <h4 style="text-align: center;text-decoration: solid">Informasi Data Penduduk</h4>
        <div class="col col-sm-12 col-xs-12 col-md-12">
            <table class="table" border="1">
                <thead>
                <tr>
                    <td colspan="3" style="text-align: center; background-color: #0e90d2">Jenis Kelamin</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td width="80%">Laki-laki :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['jklk'];?></td>
                </tr>
                <tr>
                    <td>Perempuan :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(jk) as  jkpr FROM datapenduduk where jk='perempuan'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['jkpr'];?></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col col-sm-12 col-xs-12 col-md-12">
            <table class="table" border="1">
                <thead>
                <tr>
                    <td colspan="3" style="text-align: center; background-color: #0e90d2">Status Perkawinan</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td width="80%">Sudah Kawin :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td>Belum Kawin :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row container-fluid">
        <div class="col col-sm-12 col-xs-12 col-md-12 container">
            <table class="table" border="1">
                <thead>
                <tr>
                    <td colspan="3" style="text-align: center; background-color: #0e90d2">Agama</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td width="80%">Islam :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(agama) as  a FROM datapenduduk where agama='Islam'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td>Kristen :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(agama) as  a FROM datapenduduk where agama='Kristen'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td>Kristen Khatolik :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(agama) as  a FROM datapenduduk where agama='kristen khatolik'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                    <td>Hindu :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(agama) as  a FROM datapenduduk where agama='hindu'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td>Budha :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(agama) as  a FROM datapenduduk where agama='Budha'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td>Konghucu :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(agama) as  a FROM datapenduduk where agama='Konghucu'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col col-sm-12 col-xs-12 col-md-12 container">
            <table class="table" border="1">
                <thead>
                <tr>
                    <td colspan="3" style="text-align: center; background-color: #0e90d2">Pendidikan</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td width="80%">Belum Sekolah :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='belum sekolah'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Taman Kanak-kanak (TK) :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Taman Kanak-kanak (TK)'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Sekolah Dasar (SD) :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Sekolah Dasar (SD)'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Sekolah Menengah Pertama (SMP) :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Sekolah Menengah Pertama (SMP)'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Sekolah Menengah Atas (SMA) :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Sekolah Menengah Atas (SMA)'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Program Diploma (D3) :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Program Diploma (D3)'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Program Sarjana (S1) :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Program Sarjana (S1)'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Program Magister (S2) :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Program Magister (S2)'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Program Doktor (S3) :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Program Doktor (S3)'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col col-sm-12 col-xs-12 col-md-12 container">
            <table class="table" border="1">
                <thead>
                <tr>
                    <td colspan="3" style="text-align: center; background-color: #0e90d2">Desa</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td width="80%">Kampong Badar :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Badar'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Binanga :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Binanga'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Blukur/Belukur Makmur :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Blukur/Belukur Makmur'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Dah :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Dah'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Geruguh :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Geruguh'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Harapan Baru :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Harapan Baru'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Kuala Kepeng :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Kuala Kepeng'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Kuta Beringin :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Kuta Beringin'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Lae Mate :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Lae Mate'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Lae Pamualan :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Lae Pamualan'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Mandilam :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Mandilam'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Muara Batu-Batu :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Muara Batu-Batu'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Oboh :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Oboh'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Panglima Saman :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Panglima Saman'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Pasar Rundeng :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Pasar Rundeng'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Sepadan :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Sepadan'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Sibuasan :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Sibuasan'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Sibungke :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Sibungke'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Siperkas :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Siperkas'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Suaq/Suak Jampak :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Suaq/Suak Jampak'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Tanah Tumbuh :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Tanah Tumbuh'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong  :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Teladan Baru'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td width="80%">Kampong Tualang :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Tualang'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="row container-fluid">
        <div class="col col-sm-12 col-xs-12 col-md-12 container"> </div>
        <div class="col col-sm-12 col-xs-12 col-md-12 container"> </div>
        <div class="col col-sm-12 col-xs-12 col-md-12 container">
            <table class="table" border="1">
                <thead>
                <tr>
                    <td colspan="3" style="text-align: center; background-color: #0e90d2">Pekerjaan</td>
                </tr>
                </thead>
                <tbody>
                <tr>	<td width="80%">	TNI	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='TNI'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Belum / Tidak Bekerja	</td>	<td   class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Belum / Tidak Bekerja'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Mengurus Rumah Tangga	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Mengurus Rumah Tangga'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Pelajar / Mahasiswa	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pelajar / Mahasiswa'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td  width="80%">	PNS	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='PNS'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	POLRI	</td>	<td class="right" ><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='POLRI'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Pensiunan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pensiunan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Perdagangan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Perdagangan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Petani/Pekebun	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Petani/Pekebun'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Peternak	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Peternak'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Nelayan/Perikanan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Nelayan/Perikanan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Industri	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Industri'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Konstruksi	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Konstruksi'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Transportasi	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Transportasi'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Karyawan Swasta	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Karyawan Swasta'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Karyawan BUMN	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Karyawan BUMN'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Karyawan BUMD	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Karyawan BUMD'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Karyawan Honorer	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Karyawan Honorer'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Buruh Harian Lepas	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Buruh Harian Lepas'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Buruh Tani/Perkebunan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Buruh Tani/Perkebunan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Buruh Nelayan/Perikanan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Buruh Nelayan/Perikanan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Buruh Peternakan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Buruh Peternakan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Pembantu Rumah Tangga	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pembantu Rumah Tangga'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Tukang Cukur	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Cukur'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Tukang Listrik	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Listrik'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Tukang Batu	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Batu'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Tukang Kayu	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Kayu'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Tukang Sol Sepatu	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Sol Sepatu'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Tukang Las/Pandai Besi	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Las/Pandai Besi'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Tukang Jahit	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Jahit'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Tukang Gigi	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Gigi'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Penata Rias	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penata Rias'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Penata Busana	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penata Busana'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Penata Rambut	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penata Rambut'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Mekanik	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Mekanik'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td width="80%">	Seniman	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Seniman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Tabib	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tabib'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Paraji	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Paraji'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Perancang Busana	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Perancang Busana'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Penterjemah	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penterjemah'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Imam Mesjid	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Imam Mesjid'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Pendeta	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pendeta'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Pastor	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pastor'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Wartawan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Wartawan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Ustad/Mubaligh	</td >	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Ustad/Mubaligh'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Juru Masak	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Juru Masak'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Promotor Acara	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Promotor Acara'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Anggota DPR RI	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota DPR RI'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Anggota DPD RI	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota DPD RI'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Anggota BPK	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota BPK'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Anggota Mahkamah Konstitusi	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota Mahkamah Konstitusi'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Anggota Kabinet	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota Kabinet'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Duta Besar	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Duta Besar'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Gubernur	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Gubernur'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Wakil Gubernur	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Wakil Gubernur'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Bupati	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Bupati'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Wakil Bupati	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Wakil Bupati'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Walikota	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Walikota'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Wakil Walikota	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Wakil Walikota'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Anggota DPRD PROV	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota DPRD PROV'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Anggota DPRD Kab/Kota	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota DPRD Kab/Kota'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Dosen	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Dosen'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Guru	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Guru'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Pilot	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pilot'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Pengacara	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pengacara'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Notaris	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Notaris'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Arsitek	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Arsitek'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Akuntan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Akuntan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Konsultan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Konsultan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Dokter	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Dokter'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Perawat	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Perawat'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Apoteker	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Apoteker'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Psikiater/psikolog	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Psikiater/psikolog'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Penyiar Televisi	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penyiar Televisi'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Penyiar Radio	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penyiar Radio'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Pelaut	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pelaut'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Peneliti	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Peneliti'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Sopir	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Sopir'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Pialang	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pialang'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Paranormal	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Paranormal'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Pedagang	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pedagang'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Perangkat Desa	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Perangkat Desa'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Kepala Desa	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Kepala Desa'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Biarawan/Biarawati	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Biarawan/Biarawati'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Wiraswasta	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Wiraswasta'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                <tr>	<td>	Pekerjaan Lainnya	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pekerjaan Lainnya'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

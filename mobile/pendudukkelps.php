<?php
/**
 * Created by PhpStorm.
 * User: MIB
 * Date: 1/6/2018
 * Time: 10:20 AM
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
        <h4 style="text-align: center;text-decoration: solid">Informasi Data Penduduk Kelurahan Panglima Saman</h4>
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
                        $q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki' AND kelurahan = 'Kampong Panglima Saman'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['jklk'];?></td>
                </tr>
                <tr>
                    <td>Perempuan :</td>
                    <td class="right"><?php
                        require_once ('../lib/Dbcon.php');
                        $q="SELECT COUNT(jk) as  jkpr FROM datapenduduk where jk='perempuan' AND kelurahan = 'Kampong Panglima Saman'";
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
                    $q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin' AND kelurahan = 'Kampong Panglima Saman'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];?></td>
            </tr>
            <tr>
                <td>Belum Kawin :</td>
                <td class="right"><?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin' AND kelurahan = 'Kampong Panglima Saman'";
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
                    $q="SELECT COUNT(agama) as  a FROM datapenduduk where agama='Islam' AND kelurahan = 'Kampong Panglima Saman'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];?></td>
            </tr>
            <tr>
                <td>Kristen :</td>
                <td class="right"><?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT COUNT(agama) as  a FROM datapenduduk where agama='Kristen' AND kelurahan = 'Kampong Panglima Saman'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];?></td>
            </tr>
            <tr>
                <td>Kristen Khatolik :</td>
                <td class="right"><?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT COUNT(agama) as  a FROM datapenduduk where agama='kristen khatolik' AND kelurahan = 'Kampong Panglima Saman'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];?></td>
            </tr>
            <td>Hindu :</td>
            <td class="right"><?php
                require_once ('../lib/Dbcon.php');
                $q="SELECT COUNT(agama) as  a FROM datapenduduk where agama='hindu' AND kelurahan = 'Kampong Panglima Saman'";
                $hasil=mysqli_query($con,$q);
                $hasil2= $hasil->fetch_assoc()?>
                <?= $hasil2['a'];?></td>
            </tr>
            <tr>
                <td>Budha :</td>
                <td class="right"><?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT COUNT(agama) as  a FROM datapenduduk where agama='Budha' AND kelurahan = 'Kampong Panglima Saman'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];?></td>
            </tr>
            <tr>
                <td>Konghucu :</td>
                <td class="right"><?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT COUNT(agama) as  a FROM datapenduduk where agama='Konghucu' AND kelurahan = 'Kampong Panglima Saman'";
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
                    $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='belum sekolah' AND kelurahan = 'Kampong Panglima Saman'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];?></td>
            </tr>
            <tr>
                <td width="80%">Taman Kanak-kanak (TK) :</td>
                <td class="right"><?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Taman Kanak-kanak (TK)' AND kelurahan = 'Kampong Panglima Saman'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];?></td>
            </tr>
            <tr>
                <td width="80%">Sekolah Dasar (SD) :</td>
                <td class="right"><?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Sekolah Dasar (SD)' AND kelurahan = 'Kampong Panglima Saman'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];?></td>
            </tr>
            <tr>
                <td width="80%">Sekolah Menengah Pertama (SMP) :</td>
                <td class="right"><?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Sekolah Menengah Pertama (SMP)' AND kelurahan = 'Kampong Panglima Saman'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];?></td>
            </tr>
            <tr>
                <td width="80%">Sekolah Menengah Atas (SMA) :</td>
                <td class="right"><?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Sekolah Menengah Atas (SMA)'AND kelurahan = 'Kampong Panglima Saman'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];?></td>
            </tr>
            <tr>
                <td width="80%">Program Diploma (D3) :</td>
                <td class="right"><?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Program Diploma (D3)' AND kelurahan = 'Kampong Panglima Saman'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];?></td>
            </tr>
            <tr>
                <td width="80%">Program Sarjana (S1) :</td>
                <td class="right"><?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Program Sarjana (S1)' AND kelurahan = 'Kampong Panglima Saman'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];?></td>
            </tr>
            <tr>
                <td width="80%">Program Magister (S2) :</td>
                <td class="right"><?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Program Magister (S2)' AND kelurahan = 'Kampong Panglima Saman'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];?></td>
            </tr>
            <tr>
                <td width="80%">Program Doktor (S3) :</td>
                <td class="right"><?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Program Doktor (S3)' AND kelurahan = 'Kampong Panglima Saman'";
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
            <tr>	<td width="80%">	TNI	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='TNI' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Belum / Tidak Bekerja	</td>	<td   class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Belum / Tidak Bekerja' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Mengurus Rumah Tangga	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Mengurus Rumah Tangga' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Pelajar / Mahasiswa	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pelajar / Mahasiswa' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td  width="80%">	PNS	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='PNS' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	POLRI	</td>	<td class="right" ><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='POLRI' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Pensiunan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pensiunan' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Perdagangan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Perdagangan' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Petani/Pekebun	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Petani/Pekebun' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Peternak	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Peternak' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Nelayan/Perikanan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Nelayan/Perikanan' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Industri	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Industri' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Konstruksi	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Konstruksi' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Transportasi	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Transportasi' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Karyawan Swasta	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Karyawan Swasta' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Karyawan BUMN	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Karyawan BUMN' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Karyawan BUMD	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Karyawan BUMD' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Karyawan Honorer	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Karyawan Honorer' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Buruh Harian Lepas	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Buruh Harian Lepas' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Buruh Tani/Perkebunan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Buruh Tani/Perkebunan' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Buruh Nelayan/Perikanan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Buruh Nelayan/Perikanan' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Buruh Peternakan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Buruh Peternakan' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Pembantu Rumah Tangga	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pembantu Rumah Tangga' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Tukang Cukur	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Cukur' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Tukang Listrik	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Listrik' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Tukang Batu	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Batu' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Tukang Kayu	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Kayu' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Tukang Sol Sepatu	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Sol Sepatu' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Tukang Las/Pandai Besi	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Las/Pandai Besi' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Tukang Jahit	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Jahit' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Tukang Gigi	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Gigi' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Penata Rias	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penata Rias' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Penata Busana	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penata Busana' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Penata Rambut	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penata Rambut' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Mekanik	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Mekanik' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td width="80%">	Seniman	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Seniman' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Tabib	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tabib' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Paraji	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Paraji' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Perancang Busana	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Perancang Busana' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Penterjemah	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penterjemah' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Imam Mesjid	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Imam Mesjid' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Pendeta	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pendeta' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Pastor	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pastor' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Wartawan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Wartawan' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Ustad/Mubaligh	</td >	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Ustad/Mubaligh' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Juru Masak	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Juru Masak' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Promotor Acara	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Promotor Acara' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Anggota DPR RI	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota DPR RI' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Anggota DPD RI	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota DPD RI' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Anggota BPK	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota BPK' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Anggota Mahkamah Konstitusi	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota Mahkamah Konstitusi' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Anggota Kabinet	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota Kabinet' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Duta Besar	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Duta Besar' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Gubernur	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Gubernur' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Wakil Gubernur	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Wakil Gubernur' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Bupati	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Bupati' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Wakil Bupati	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Wakil Bupati' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Walikota	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Walikota' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Wakil Walikota	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Wakil Walikota' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Anggota DPRD PROV	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota DPRD PROV' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Anggota DPRD Kab/Kota	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota DPRD Kab/Kota' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Dosen	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Dosen' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Guru	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Guru' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Pilot	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pilot' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Pengacara	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pengacara' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Notaris	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Notaris' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Arsitek	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Arsitek' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Akuntan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Akuntan' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Konsultan	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Konsultan' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Dokter	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Dokter' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Perawat	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Perawat' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Apoteker	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Apoteker' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Psikiater/psikolog	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Psikiater/psikolog' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Penyiar Televisi	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penyiar Televisi' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Penyiar Radio	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penyiar Radio' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Pelaut	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pelaut' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Peneliti	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Peneliti' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Sopir	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Sopir' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Pialang	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pialang' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Paranormal	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Paranormal' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Pedagang	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pedagang' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Perangkat Desa	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Perangkat Desa' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Kepala Desa	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Kepala Desa' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Biarawan/Biarawati	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Biarawan/Biarawati' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Wiraswasta	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Wiraswasta' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            <tr>	<td>	Pekerjaan Lainnya	</td>	<td class="right"><?php require_once ('../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pekerjaan Lainnya' AND kelurahan = 'Kampong Panglima Saman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

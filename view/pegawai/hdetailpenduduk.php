<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/21/2017
 * Time: 10:25 PM
 */
require_once ('../../lib/Dbcon.php');
require_once ('../../lib/Dbcon2.php');
session_start();
if (!isset($_SESSION['pk'])){
    header('location:../../admin/index.php');
}
$user = ['user'];
?>
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../asset/css/menu.css">
    <link rel="stylesheet" href="../../asset/bootstrap/css/w3.css">
    <link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../../asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../asset/css/bantu1.css">
    <script src="../../asset/js/bantu1.js"></script>
    <script src="../../asset/bootstrap/js/bootstrap.min.js"></script>
    <title>Dashboard Administrator Simpang Kiri</title>
</head>

<body>
<div class="header">
    <a href="#" id="menu-action">
        <i class="fa fa-bars"></i>
        <span>Close</span>
    </a>
    <div class="logo">
        Simpang Kiri Panel
    </div>

</div>
<div class="sidebar">
    <ul>
        <li><a href="detailpenduduk.php"><i class="fa fa-users"></i><span>Penduduk</span></a></li>
        <li><a href="detailpegawai.php"><i class="fa fa-user-md"></i><span>Pegawai</span></a></li>
        <li><a href="detailberita.php"><i class="fa fa-list-alt"></i><span>Berita</span></a></li>
        <li><a href="detailpengaduan.php"><i class="fa fa-info-circle"></i><span>Pengaduan</span></a></li>
        <li><a href="../../controller/logoutadmin.php"><i class="fa fa-sign-out"></i><span>Keluar</span></a></li>
    </ul>
</div>


<div class="main" style="margin-50%: auto">
    <hr>
    <div class="row">
        <hr>
        <h4 style="text-align: center;text-decoration: solid">Informasi Data Penduduk</h4>
        <div class="col col-md-4">
            <table class="table" border="1">
                <thead>
                <tr>
                    <td colspan="3" style="text-align: center; background-color: #0e90d2">Jenis Kelamin</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td width="90%">Laki-laki :</td>
                    <td><?php
                        require_once ('../../lib/Dbcon.php');
                        $q="SELECT COUNT(jk) as  jklk FROM datapenduduk where jk='laki-laki'";
                             $hasil=mysqli_query($con,$q);
                             $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['jklk'];?></td>
                </tr>
                <tr>
                    <td>Perempuan :</td>
                    <td><?php
                        require_once ('../../lib/Dbcon.php');
                        $q="SELECT COUNT(jk) as  jkpr FROM datapenduduk where jk='perempuan'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['jkpr'];?></td>
                </tr>
                </tbody>
            </table>
            </div>
            <div class="col col-md-4">
            <table class="table" border="1">
                <thead>
                <tr>
                    <td colspan="3" style="text-align: center; background-color: #0e90d2">Status Perkawinan</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td width="90%">Sudah Kawin :</td>
                    <td><?php
                        require_once ('../../lib/Dbcon.php');
                        $q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Sudah Kawin'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                <tr>
                    <td>Belum Kawin :</td>
                    <td><?php
                        require_once ('../../lib/Dbcon.php');
                        $q="SELECT COUNT(statusperkawinan) as  a FROM datapenduduk where statusperkawinan='Belum Kawin'";
                        $hasil=mysqli_query($con,$q);
                        $hasil2= $hasil->fetch_assoc()?>
                        <?= $hasil2['a'];?></td>
                </tr>
                </tbody>
            </table>
            </div>
            <div class="col col-md-4">
                <table class="table" border="1">
                    <thead>
                    <tr>
                        <td colspan="3" style="text-align: center; background-color: #0e90d2">Status Kematian</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td width="90%">Masih Hidup :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(lain) as  a FROM datapenduduk where lain='Masih Hidup'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td>Sudah Meninggal :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(lain) as  a FROM datapenduduk where lain='Sudah Meninggal'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row container-fluid">
            <div class="col col-md-4 container">
                <table class="table" border="1">
                    <?php
                    require_once ('../../lib/Dbcon.php');
                    $q="SELECT DISTINCT agama as name, COUNT(agama) as coun FROM `datapenduduk` GROUP BY agama";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <thead>
                    <tr>
                        <td colspan="3" style="text-align: center; background-color: #0e90d2">Agama</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td width="90%">Islam :</td>
                        <td>
                            <?php if ($hasil2['coun']>1){echo $hasil2['coun'];}
                            else {echo 0;}
                            ;?></td>
                    </tr>
                    <tr>
                        <td>Kristen :</td>
                        <td><?php if ($hasil2['coun']>1){echo $hasil2['coun'];}
                            else {echo 0;}
                            ;?></td>
                    </tr>
                    <tr>
                        <td>Kristen Khatolik :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(agama) as  a FROM datapenduduk where agama='kristen khatolik'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>

                    <tr>
                        <td>Hindu :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(agama) as  a FROM datapenduduk where agama='hindu'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td>Budha :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(agama) as  a FROM datapenduduk where agama='Budha'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td>Konghucu :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(agama) as  a FROM datapenduduk where agama='Konghucu'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    </tbody>
                </table>
        </div>
            <div class="col col-md-4 container">
                <table class="table" border="1">
                    <thead>
                    <tr>
                        <td colspan="3" style="text-align: center; background-color: #0e90d2">Pendidikan</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td width="90%">Belum Sekolah :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='belum sekolah'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Taman Kanak-kanak (TK) :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Taman Kanak-kanak (TK)'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Sekolah Dasar (SD) :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Sekolah Dasar (SD)'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Sekolah Menengah Pertama (SMP) :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Sekolah Menengah Pertama (SMP)'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Sekolah Menengah Atas (SMA) :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Sekolah Menengah Atas (SMA)'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Program Diploma (D3) :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Program Diploma (D3)'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                     <tr>
                        <td width="90%">Program Sarjana (S1) :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Program Sarjana (S1)'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Program Magister (S2) :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Program Magister (S2)'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Program Doktor (S3) :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(pendidikan) as  a FROM datapenduduk where pendidikan='Program Doktor (S3)'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col col-md-4 container">
                <table class="table" border="1">
                    <thead>
                    <tr>
                        <td colspan="3" style="text-align: center; background-color: #0e90d2">Pendidikan</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td width="90%">Kampong Buluh Dori/ KM 11 :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Buluh Dori/ KM 11'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Kampong Lae Oram :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Kuta Cepu'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Kampong Makmur Jaya :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Makmur Jaya'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Kampong Mukti Makmur :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Mukti Makmur'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Kampong Pasar Panjang :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Pasar Panjang'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Kampong Pegayo :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Pegayo'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Kampong Sikelondang :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Sikelondang'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Kampong Subulussalam :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Subulussalam'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Kampong Subulussalam Barat :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Subulussalam Barat'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Kampong Subulussalam Selatan :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Subulussalam Selatan'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Kampong Subulussalam Utara :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Subulussalam Utara'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Kampong Suka Makmur :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Suka Makmur'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    <tr>
                        <td width="90%">Kampong Tangga Besi :</td>
                        <td><?php
                            require_once ('../../lib/Dbcon.php');
                            $q="SELECT COUNT(kelurahan) as  a FROM datapenduduk where kelurahan='Kampong Tangga Besi'";
                            $hasil=mysqli_query($con,$q);
                            $hasil2= $hasil->fetch_assoc()?>
                            <?= $hasil2['a'];?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
    </div>
    <div class="row container-fluid">
        <div class="col col-md-4 container"> </div>
        <div class="col col-md-4 container"> </div>
        <div class="col col-md-4 container">
            <table class="table" border="1">
                <thead>
                <tr>
                    <td colspan="3" style="text-align: center; background-color: #0e90d2">Pekerjaan</td>
                </tr>
                </thead>
                <tbody>
                    <tr>	<td>	TNI	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='TNI'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Belum / Tidak Bekerja	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Belum / Tidak Bekerja'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Mengurus Rumah Tangga	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Mengurus Rumah Tangga'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Pelajar / Mahasiswa	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pelajar / Mahasiswa'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	PNS	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='PNS'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	POLRI	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='POLRI'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Pensiunan	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pensiunan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Perdagangan	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Perdagangan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Petani/Pekebun	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Petani/Pekebun'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Peternak	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Peternak'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Nelayan/Perikanan	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Nelayan/Perikanan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Industri	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Industri'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Konstruksi	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Konstruksi'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Transportasi	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Transportasi'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Karyawan Swasta	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Karyawan Swasta'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Karyawan BUMN	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Karyawan BUMN'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Karyawan BUMD	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Karyawan BUMD'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Karyawan Honorer	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Karyawan Honorer'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Buruh Harian Lepas	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Buruh Harian Lepas'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Buruh Tani/Perkebunan	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Buruh Tani/Perkebunan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Buruh Nelayan/Perikanan	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Buruh Nelayan/Perikanan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Buruh Peternakan	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Buruh Peternakan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Pembantu Rumah Tangga	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pembantu Rumah Tangga'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Tukang Cukur	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Cukur'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Tukang Listrik	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Listrik'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Tukang Batu	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Batu'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Tukang Kayu	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Kayu'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Tukang Sol Sepatu	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Sol Sepatu'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Tukang Las/Pandai Besi	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Las/Pandai Besi'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Tukang Jahit	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Jahit'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Tukang Gigi	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tukang Gigi'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Penata Rias	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penata Rias'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Penata Busana	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penata Busana'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Penata Rambut	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penata Rambut'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Mekanik	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Mekanik'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Seniman	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Seniman'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Tabib	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Tabib'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Paraji	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Paraji'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Perancang Busana	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Perancang Busana'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Penterjemah	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penterjemah'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Imam Mesjid	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Imam Mesjid'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Pendeta	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pendeta'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Pastor	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pastor'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Wartawan	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Wartawan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Ustad/Mubaligh	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Ustad/Mubaligh'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Juru Masak	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Juru Masak'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Promotor Acara	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Promotor Acara'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Anggota DPR RI	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota DPR RI'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Anggota DPD RI	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota DPD RI'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Anggota BPK	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota BPK'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Anggota Mahkamah Konstitusi	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota Mahkamah Konstitusi'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Anggota Kabinet	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota Kabinet'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Duta Besar	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Duta Besar'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Gubernur	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Gubernur'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Wakil Gubernur	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Wakil Gubernur'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Bupati	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Bupati'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Wakil Bupati	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Wakil Bupati'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Walikota	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Walikota'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Wakil Walikota	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Wakil Walikota'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Anggota DPRD PROV	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota DPRD PROV'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Anggota DPRD Kab/Kota	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Anggota DPRD Kab/Kota'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Dosen	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Dosen'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Guru	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Guru'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Pilot	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pilot'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Pengacara	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pengacara'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Notaris	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Notaris'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Arsitek	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Arsitek'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Akuntan	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Akuntan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Konsultan	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Konsultan'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Dokter	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Dokter'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Perawat	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Perawat'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Apoteker	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Apoteker'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Psikiater/psikolog	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Psikiater/psikolog'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Penyiar Televisi	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penyiar Televisi'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Penyiar Radio	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Penyiar Radio'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Pelaut	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pelaut'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Peneliti	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Peneliti'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Sopir	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Sopir'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Pialang	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pialang'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Paranormal	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Paranormal'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Pedagang	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pedagang'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Perangkat Desa	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Perangkat Desa'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Kepala Desa	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Kepala Desa'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Biarawan/Biarawati	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Biarawan/Biarawati'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Wiraswasta	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Wiraswasta'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                    <tr>	<td>	Pekerjaan Lainnya	</td>	<td><?php require_once ('../../lib/Dbcon.php');$q="SELECT COUNT(pekerjaan) as pekerjaan FROM datapenduduk where pekerjaan='Pekerjaan Lainnya'";$hasil=mysqli_query($con,$q);$hasil2= $hasil->fetch_assoc()?>	<?= $hasil2['pekerjaan'];?></td>	</tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
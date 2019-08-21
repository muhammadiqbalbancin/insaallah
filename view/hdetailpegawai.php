<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/21/2017
 * Time: 10:25 PM
 */
require_once ('../lib/Dbcon.php');
require_once ('../lib/Dbcon2.php');

session_start();
if (!isset($_SESSION['pk'])){
    header('location:../admin/index.php');
}
$user = ['user'];
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
    <title>Dashboard Administrator Longkib</title>
</head>

<body>
<div class="header">
    <a href="#" id="menu-action">
        <i class="fa fa-bars"></i>
        <span>Close</span>
    </a>
    <div class="logo">
        Longkib Admin
    </div>

</div>
<div class="sidebar">
    <ul>
        <li><a href="detailpenduduk.php"><i class="fa fa-users"></i><span>Penduduk</span></a></li>
        <li><a href="detailpegawai.php"><i class="fa fa-user-md"></i><span>Pegawai</span></a></li>
        <li><a href="detailberita.php"><i class="fa fa-list-alt"></i><span>Berita</span></a></li>
        <li><a href="detailrole.php"><i class="fa fa-user"></i><span>Role</span></a></li>
        <li><a href="detailanggaran.php"><i class="fa fa-money"></i><span>Anggaran</span></a></li>
        <li><a href="detailpemerintah.php"><i class="fa fa-bank"></i><span>Pemerintah</span></a></li>
        <li><a href="detailgambarskpd.php"><i class="fa fa-file-image-o"></i><span>Gambar SKPD</span></a></li>
        <li><a href="detailwilayah.php"><i class="fa fa-file-text"></i><span>Keterangan Wilayah</span></li>
        <li><a href="detailarsiplayanan.php"><i class="fa fa-folder"></i><span>Arsip Layanan</span></a></li>        
        <li><a href="detailpengaduan.php"><i class="fa fa-info-circle"></i><span>Pengaduan</span></a></li>
        <li><a href="../controller/logoutadmin.php"><i class="fa fa-sign-out"></i><span>Keluar</span></a></li>
    </ul>
</div>


<div class="main" style="margin-50%: auto">
    <hr>
    <div class="row">
        <hr>
        <h4 style="text-align: center;text-decoration: solid">Informasi Data Pegawai</h4>
				<div class="col col-md-4">
				<table class="table" border="1">
					<thead>
					<tr>
						<td colspan="3" style="text-align: center; background-color: #0e90d2">Status</td>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td width="90%">Pegawai Negeri Sipil</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(status) as  status FROM datapegawai where status='Pegawai Negeri Sipil'";
							$hasil=mysqli_query($con,$q);
							$hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['status'];?></td>
					</tr>
					<tr>
						<td>Aparatur</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(status) as  status FROM datapegawai where status='Aparatur'";
							$hasil=mysqli_query($con,$q);
							$hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['status'];?></td>
					</tr>
					</tbody>
				</table>
				</div>

				<div class="col col-md-4">
					<table class="table" border="1">
						<thead>
						<tr>
							<td colspan="3" style="text-align: center; background-color: #0e90d2">Aktivasi</td>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td width="90%">Pensiun</td>
							<td><?php
								require_once ('../lib/Dbcon.php');
								$q="SELECT COUNT(aktivasi) as  aktivasi FROM datapegawai where aktivasi='Pensiun'";
								$hasil=mysqli_query($con,$q);
								$hasil2= $hasil->fetch_assoc()?>
								<?= $hasil2['aktivasi'];?></td>
						</tr>
						<tr>
							<td>Belum Pensiun</td>
							<td><?php
								require_once ('../lib/Dbcon.php');
								$q="SELECT COUNT(aktivasi) as  aktivasi FROM datapegawai where aktivasi='Belum Pensiun'";
								$hasil=mysqli_query($con,$q);
								$hasil2= $hasil->fetch_assoc()?>
								<?= $hasil2['aktivasi'];?></td>
						</tr>
						</tbody>
					</table>
				</div>

				<div class="col col-md-4">
				<table class="table" border="1">
					<thead>
					<tr>
						<td colspan="3" style="text-align: center; background-color: #0e90d2">Golongan</td>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td width="90%">IV E</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(golongan) as  golongan FROM datapegawai where golongan='IV E'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['golongan'];?></td>
					</tr>
					<tr>
						<td>IV D</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(golongan) as  golongan FROM datapegawai where golongan='IV D'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['golongan'];?></td>
					</tr>
					<tr>
						<td>IV C</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(golongan) as  golongan FROM datapegawai where golongan='IV C'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['golongan'];?></td>
					</tr>
					<tr>
						<td>IV B</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(golongan) as  golongan FROM datapegawai where golongan='IV B'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['golongan'];?></td>
					</tr>
					<tr>
						<td>IV A</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(golongan) as  golongan FROM datapegawai where golongan='IV A'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['golongan'];?></td>
					</tr>
					<tr>
						<td>III D</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(golongan) as  golongan FROM datapegawai where golongan='III D'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['golongan'];?></td>
					</tr>
					<tr>
						<td>III C</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(golongan) as  golongan FROM datapegawai where golongan='III C'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['golongan'];?></td>
					</tr>
					<tr>
						<td>III B</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(golongan) as  golongan FROM datapegawai where golongan='III B'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['golongan'];?></td>
					</tr>
					<tr>
						<td>III A</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(golongan) as  golongan FROM datapegawai where golongan='III A'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['golongan'];?></td>
					</tr>
					<tr>
						<td>II D</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(golongan) as  golongan FROM datapegawai where golongan='II D'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['golongan'];?></td>
					</tr>
					<tr>
						<td>II C</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(golongan) as  golongan FROM datapegawai where golongan='II C'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['golongan'];?></td>
					</tr>
					<tr>
						<td>II B</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(golongan) as  golongan FROM datapegawai where golongan='II B'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['golongan'];?></td>
					</tr>
					<tr>
						<td>II A</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(golongan) as  golongan FROM datapegawai where golongan='II A'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['golongan'];?></td>
					</tr>
					<tr>
						<td>I D</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(golongan) as  golongan FROM datapegawai where golongan='I D'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['golongan'];?></td>
					</tr>
					<tr>
						<td>I C</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(golongan) as  golongan FROM datapegawai where golongan='I C'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['golongan'];?></td>
					</tr>
					<tr>
						<td>I B</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(golongan) as  golongan FROM datapegawai where golongan='I B'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['golongan'];?></td>
					</tr>
					<tr>
						<td>I A</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(golongan) as  golongan FROM datapegawai where golongan='I A'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['golongan'];?></td>
					</tr>
					</tbody>
				</table>
				</div>
			</div>
	</div>
</body>
</html>

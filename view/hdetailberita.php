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
    <title>Dashboard Administrator Ketapang Indah</title>
</head>

<body>
<div class="header">
    <a href="#" id="menu-action">
        <i class="fa fa-bars"></i>
        <span>Close</span>
    </a>
    <div class="logo">
        Ketapang Indah Admin
    </div>

</div>
<div class="sidebar">
    <ul>
        <li><a href="detailberita.php"><i class="fa fa-list-alt"></i><span>Berita</span></a></li>
        <li><a href="detailrole.php"><i class="fa fa-user"></i><span>Akun</span></a></li>
        <li><a href="detailanggaran.php"><i class="fa fa-money"></i><span>Anggaran</span></a></li>
        <li><a href="detailpemerintah.php"><i class="fa fa-bank"></i><span>Pemerintah</span></a></li>
        <li><a href="detailgambarskpd.php"><i class="fa fa-file-image-o"></i><span>Gambar pemerintah</span></a></li>
        <li><a href="detailarsiplayanan.php"><i class="fa fa-folder"></i><span>Arsip Layanan</span></a></li>        
        <li><a href="detailpengaduan.php"><i class="fa fa-info-circle"></i><span>Komentar Publik</span></a></li>
        <li><a href="../controller/logoutadmin.php"><i class="fa fa-sign-out"></i><span>Keluar</span></a></li>
    </ul>
</div>


<div class="main" style="margin-50%: auto">
    <hr>
    <div class="row">
        <hr>
        <h4 style="text-align: center;text-decoration: solid">Informasi Data Berita</h4>
			<div class="col col-md-4">
				<table class="table" border="1">
					<thead>
					<tr>
						<td colspan="3" style="text-align: center; background-color: #0e90d2">Tipe Berita</td>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td width="90%">Berita</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(tipe) as  tipe FROM databerita where tipe='Berita'";
								 $hasil=mysqli_query($con,$q);
								 $hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['tipe'];?></td>
					</tr>
					<tr>
						<td>Informasi</td>
						<td><?php
							require_once ('../lib/Dbcon.php');
							$q="SELECT COUNT(tipe) as  tipe FROM databerita where tipe='Informasi'";
							$hasil=mysqli_query($con,$q);
							$hasil2= $hasil->fetch_assoc()?>
							<?= $hasil2['tipe'];?></td>
					</tr>
					</tbody>
				</table>
			 </div>
		</div>
	</div>
</body>
</html>

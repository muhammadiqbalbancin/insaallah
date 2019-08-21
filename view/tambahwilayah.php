<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/20/2017
 * Time: 2:55 PM
 */
require_once ('../lib/Dbcon.php');
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


<div class="container main" style="margin-50%: auto">
    <hr>
		<hr>
		<div class="row">
			<hr>
			<h4>Tambah Keterangan Wilayah</h4>
			<br>
			<a href="detailwilayah.php"><button type="button" class="btn btn-primary" value="Lihat Detail Keterangan wilayah"><p style="color:#0f0f0f">Lihat Detail Data Pemerintah</button></a>
			<hr>
			<form name="inputwilayah" method="post" action="../controller/createwilayah.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="namadesa">Desa :</label>
                                    <select class="form-control" id="namadesa" name="namadesa">
                                        <option value="" disabled selected>Pilih desa</option>
                                        <option>Bangun Sari</option>
                                        <option>Bukit Alim</option>
                                        <option>Darul Aman (Ginasing)</option>
                                        <option>Darussalam</option>
                                        <option>Lae Saga</option>
                                        <option>Longkib</option>
                                        <option>Panji</option>
                                        <option>Rantau Panjang</option>
                                        <option>Sepang</option>
                                        <option>Sikerabang</option>
                                    </select>
        </div>
				<div class="form-group">
					<label for="judul1">Ucapan Selamat Datang</label>
					<input placeholder="Masukkan Ucapan Selamat Datang" type="text" class="form-control" name="judul1" id="judul1">
				</div>
				<div class="form-group">
					<label for="judul2">Nama Desa</label>
					<input placeholder="Masukkan Nama Desa" type="text" class="form-control" name="judul2" id="judul2">
				</div>
                <div class="form-group">
                    <label for="ketwilayah">Gambaran Umumu Desa</label>
                    <textarea placeholder="Masukkan Gambaran Umum" type="text" class="form-control" name="ketwilayah" id="ketwilayah"> </textarea>
                </div>
				<button type="submit" name='inputwilayah' class="btn btn-success">Tambah</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</form>
		</div>
		<hr>
		<div class="row"></div>
	</div>
</body>
</html>

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
    <title>Dashboard Administrator Simpang Kiri</title>
</head>

<body>
<div class="header">
    <a href="#" id="menu-action">
        <i class="fa fa-bars"></i>
        <span>Close</span>
    </a>
    <div class="logo">
        Simpang Kiri Admin
    </div>

</div>
<div class="sidebar">
    <ul>
        <li><a href="detailpenduduk.php"><i class="fa fa-users"></i><span>Penduduk</span></a></li>
        <li><a href="detailpegawai.php"><i class="fa fa-user-md"></i><span>Pegawai</span></a></li>
        <li><a href="detailberita.php"><i class="fa fa-list-alt"></i><span>Berita</span></a></li>
        <li><a href="detailrole.php"><i class="fa fa-user"></i><span>Role</span></a></li>
        <li><a href="detailpengaduan.php"><i class="fa fa-info-circle"></i><span>Pengaduan</span></a></li>
        <li><a href="../controller/logoutadmin.php"><i class="fa fa-sign-out"></i><span>Keluar</span></a></li>
    </ul>
</div>


<div class="container main" style="margin-50%: auto">
    <hr>
		<hr>
		<div class="row">
			<hr>
			<h4>Tambah Data Berita</h4>
			<br>
			<a href="detailberita.php"><button type="button" class="btn btn-primary" value="Lihat Detail Data Penduduk"><p style="color:#0f0f0f">Lihat Detail Data Berita</button></a>
			<hr>
			<form name="inputberita" method="post" action="../controller/createberita.php" enctype="multipart/form-data">
				<div class="form-group">
					<label for="judul">Judul</label>
					<input placeholder="Masukkan Judul" type="text" class="form-control" name="judul" id="judul">
				</div>
				<div class="form-group">
					<label for="isi">Isi</label>
					<textarea placeholder="Masukkan Isi" rows="4" cols="50" class="form-control" name="isi" id="isi"></textarea>
				</div>
				<div class="form-group">
					<label for="tipe">Tipe</label>
					<select class="form-control" id="tipe" name="tipe">
                        <option value="" disabled selected>Pilih Tipe</option>
						<option>Berita</option>
						<option>Informasi</option>
					</select>
				</div>
				<div class="form-group">
					<label for="tglpublish">Tanggal Publish</label>
					<input placeholder="Masukkan Tanggal Publish" type="text" onfocus="(this.type='date')" class="form-control" name="tglpublish" id="tglpublish">
				</div>
                <div class="form-group">
                    <label for="tglpublish">Pilih Gambar</label>
                    <input placeholder="Pilih Gambar" type="file" name="gambar" id="gambar">
                </div>
				<button type="submit" name='inputberita' class="btn btn-success">Tambah</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</form>
		</div>
		<hr>
		<div class="row"></div>
	</div>
</body>
</html>
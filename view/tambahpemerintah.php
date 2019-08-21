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


<div class="container main" style="margin-50%: auto">
    <hr>
		<hr>
		<div class="row">
			<hr>
			<h4>Tambah Data Pemerintah</h4>
			<br>
			<a href="detailpemerintah.php"><button type="button" class="btn btn-primary" value="Lihat Detail Data Pemerintah"><p style="color:#0f0f0f">Lihat Detail Data Pemerintah</button></a>
			<hr>
			<form name="inputpemerintah" method="post" action="../controller/createpemerintah.php" enctype="multipart/form-data">

            <div class="form-group">
                <select type="hidden" class="form-control" id="table" name="table" >
                    <option value="" disabled>Pilih No Table</option>
                    <option selected>Table 1</option>
                </select>				    
				</div>
				<div class="form-group">
				    <label for="judul">judul tabel</label>
				    <input placeholder="Judul Table"  name="judul" type="text" class="form-control" id="judul">
				</div>				
				<div class="form-group">
					<label for="namapemerintah">Nama Pejabat</label>
					<input placeholder="Masukkan Nama" type="text" class="form-control" name="namapemerintah" id="namapemerintah">
				</div>
				<div class="form-group">
					<label for="nippemerintah">Nip</label>
					<input placeholder="Masukkan Nip" type="number" class="form-control" name="nippemerintah" id="nippemerintah">
				</div>
				<div class="form-group">
					<label for="jabatanpemerintah">Jabatan</label>
					<input placeholder="Masukan Jabatan" type="text" class="form-control" name="jabatanpemerintah" id="jabatanpemerintah">
					
                        
				</div>
				<button type="submit" name='inputpemerintah' class="btn btn-success">Tambah</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</form>
		</div>
		<hr>
		<div class="row"></div>
	</div>
</body>
</html>
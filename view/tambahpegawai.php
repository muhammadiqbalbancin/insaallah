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


<div class="container main" style="margin-50%: auto">
    <hr>
    <hr>
    <div class="row">
		<hr>
        <h4>Tambah data Pegawai</h4>
        <br>
        <a href="detailpegawai.php"><button type="button" class="btn btn-primary" value="Lihat Detail Data Penduduk"><p style="color:#0f0f0f">Lihat Detail Data Pegawai</button></a>
        <hr>
        <form name="inputpegawai" method="post" action="../controller/createpegawai.php">
            <div class="form-group">
                <label for="nip">Nip</label>
                <input placeholder="Masukkan NIP" type="number" class="form-control" name="nip" id="nip">
            </div>
            <div class="form-group">
                <label for="namapegawai">Nama Pegawai</label>
                <input placeholder="Masukkan Nama Pegawai" type="text" class="form-control" name="namapegawai" id="namapegawai">
            </div>
            <div class="form-group">
                <label for="tmptlahir">Tempat Lahir</label>
                <input placeholder="Masukkan Tempat Lahir" type="text" class="form-control" name="tmptlahir" id="tmptlahir">
            </div>
			<div class="form-group">
                <label for="tgllahir">Tanggal Lahir :</label>
                <input placeholder="Masukkan Tanggal Lahir" type="text" onfocus="(this.type='date')" class="form-control" name="tgllahir" id="tgllahir">
            </div>
			<div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input placeholder="Masukkan Jabatan" type="text" class="form-control" name="jabatan" id="jabatan">
            </div>
			<div class="form-group">
                <label for="golongan">Golongan</label>
                <select class="form-control" id="golongan" name="golongan">
                    <option value="" disabled selected>Pilih Golongan</option>
                    <option>IV E</option>
                    <option>IV D</option>
					<option>IV C</option>
                    <option>IV B</option>
					<option>IV A</option>
                    <option>III D</option>
					<option>III C</option>
                    <option>III B</option>
					<option>III A</option>
                    <option>II D</option>
					<option>II C</option>
                    <option>II B</option>
					<option>II A</option>
                    <option>I D</option>
					<option>I C</option>
					<option>I B</option>
					<option>I A</option>
                </select>
            </div>
			<div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="" disabled selected>Pilih Status</option>
                    <option>Pegawai Negeri Sipil</option>
                    <option>Aparatur</option>
                </select>
            </div>
			  <div class="form-group">
                <label for="aktivasi">Aktivasi</label>
                <select class="form-control" id="aktivasi" name="aktivasi">
                    <option value="" disabled selected>Pilih Aktivasi</option>
                    <option>Pensiun</option>
                    <option>Belum Pensiun</option>
                </select>
            </div>
            <button type="submit" name='inputpegawai' class="btn btn-success">Tambah</button>
            <button type="reset" class="btn btn-danger">Reset</button>
			<hr>
        </form>
    </div>
    <hr>
    <div class="row"></div>
</div>
</body>
</html>

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
        <li><a href="detailanakyatim.php"><i class="fa fa-child"></i><span>Anak Yatim</span></a></li>
        <li><a href="detailpengaduan.php"><i class="fa fa-info-circle"></i><span>Pengaduan</span></a></li>
        <li><a href="../controller/logoutadmin.php"><i class="fa fa-sign-out"></i><span>Keluar</span></a></li>
    </ul>
</div>


<div class="container main" style="margin-50%: auto">
    <hr>
    <hr>
    <div class="row">
		<hr>
        <h4>Tambah Data Anak Yatim</h4>
        <br>
        <a href="detailanakyatim.php"><button type="button" class="btn btn-primary" value="Lihat Detail Data Anak Yatim"><p style="color:#0f0f0f">Lihat Detail Data Anak Yatim</button></a>
        <hr>
        <form name="inputanakyatim" method="post" action="../controller/createanakyatim.php">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input placeholder="Masukkan Nama" type="text" class="form-control" name="nama" id="nama">
            </div>
			<div class="form-group">
                <label for="tempatlahir">Tempat</label>
                <input placeholder="Masukkan Tempat Lahir" type="text" class="form-control" name="tempatlahir" id="tempatlahir">
            </div>
			<div class="form-group">
                <label for="tgllahir">Tanggal Lahir</label>
                <input placeholder="Masukkan Tanggal Lahir" type="text" onfocus="(this.type='date')" class="form-control" name="tgllahir" id="tgllahir">
            </div>
			<div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select class="form-control" id="jk" name="jk">
                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                    <option>Laki - Laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input placeholder="Masukkan Alamat" type="text" class="form-control" name="alamat" id="alamat">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="" disabled selected>Pilih Status</option>
                    <option>Yatim</option>
                    <option>Piatu</option>
                    <option>Yatim Piatu</option>
                </select>
            </div>
            <button type="submit" name='inputanakyatim' class="btn btn-success">Tambah</button>
            <button type="reset" class="btn btn-danger">Reset</button>
			<hr>
        </form>
    </div>
    <hr>
    <div class="row"></div>
</div>
</body>
</html>
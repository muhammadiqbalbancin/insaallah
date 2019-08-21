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
        <h4>Tambah Data Anggaran</h4>
        <br>
        <a href="detailanggaran.php"><button type="button" class="btn btn-primary" value="Lihat Detail Data Anggaran"><p style="color:#0f0f0f">Lihat Detail Data Anggaran</button></a>
        <hr>
        <form name="inputanggaran" method="post" action="../controller/createanggaran.php">
            <div class="form-group">
                <label for="tableno">Table No</label>
                <select class="form-control" id="tableno" name="tableno">
                    <option value="" disabled selected>Pilih Table No Berapa Diisi</option>
                    <option>Table 1</option>
                    <option>Table 2</option>
                    <option>Table 3</option>
                    <option>Table 4</option>
                    <option>Table 5</option>
                    <option>Table 6</option>
                    <option>Table 7</option>
                    <option>Table 8</option>
                    <option>Table 9</option>
                    <option>Table 10</option>
                    <option>Table 11</option>
                    <option>Table 12</option>
                    <option>Table 13</option>
                    <option>Table 14</option>
                    <option>Table 16</option>
                    <option>Table 17</option>
                    <option>Table 18</option>
                    <option>Table 19</option>
                    <option>Table 20</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jenis">Nama Table</label>
                <input placeholder="Masukkan Nama Table & Jumlah Anggaran" type="text" class="form-control" name="jenis" id="jenis">
            </div>            
            <div class="form-group">
                <label for="nip">Keterangan Anggaran</label>
                <input placeholder="Masukkan Keterangan anggaran digunakan" type="text" class="form-control" name="nama" id="nama">
            </div>
            <div class="form-group">
                <label for="anggaran">Jumalah Anggaran</label>
                <input placeholder="Masukkan Jumlah anggaran digunakan *Cukup Angka Tidak Perlur (Rp)" type="text" class="form-control" name="anggaran" id="anggaran">
            </div>
            <button type="submit" name='inputanggaran' class="btn btn-success">Tambah</button>
            <button type="reset" class="btn btn-danger">Reset</button>
			<hr>
        </form>
    </div>
    <hr>
    <div class="row"></div>
</div>
</body>
</html>
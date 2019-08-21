<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/20/2017
 * Time: 2:55 PM
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


<div class="main container-fluid" style="margin-50%: auto">
    <hr>
    <hr>
    <div class="row"><br>
        <h4>Tambah pengaduan</h4>
        <br>
        <a href="detailpengaduan.php"><button type="button" class="btn btn-primary" value="Lihat Detail pengaduan"><p style="color:#0f0f0f">Lihat Detail Data Pengaduan</button></a>
        <hr>
        <form name="inputpengaduan" method="post" action="../controller/createpengaduan.php">
            <div class="form-group">
                <label for="nik">NIK :</label>
                <input type="text" class="form-control" name="nik" id="nik">
            </div>
            <div class="form-group">
                <label for="nohp">NO HP :</label>
                <input type="text" class="form-control" name="nohp" id="nohp">
            </div>
            <div class="form-group">
                <label for="isipg">Isi Laporan :</label>
                <textarea type="textarea" height="20px" width="100px" class="form-control" name="isipg" id="isipg"></textarea>
            </div>
            <div class="form-group">
                <label for="prioritas">Tingkat Kepentingan :</label>
                <select class="form-control" id="prioritas" name="prioritas">
                    <option value="" disabled selected>Pilih Tingkat Kepentingan</option>
                    <option>Cukup Penting</option>
                    <option>Penting</option>
                    <option>Sangat Penting</option>
                    <option>Mendesak</option>
                </select>
            </div>
            <!--<div class="form-group">
                <label for="statuspengaduan">Status Pengaduan :</label>
                <select class="form-control" name="statuspengaduan" id="statuspengaduan" >
                    <option>Belum Ditanggapi</option>
                    <option>Sudah Ditanggapi</option>
                 </select></spam></td>
            </div>-->
	   <div class="form-group">
		<script type='text/javascript'>

    		   var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    		   var date = new Date();
    		   var day = date.getDate();
    		   var month = date.getMonth();
    		   var yy = date.getYear();
    		   var year = (yy < 1000) ? yy + 1900 : yy;
    		   document.write(day + " " + months[month] + " " + year);
    		</script>
	    </div>
            	<button type="submit" name='inputpengaduan' class="btn btn-success">Tambah</button>
            	<button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
    <hr>
    <div class="row"></div>
</div>
</body>
</html>

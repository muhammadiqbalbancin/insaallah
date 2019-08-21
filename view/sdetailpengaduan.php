<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/21/2017
 * Time: 6:39 PM
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
    <div class="table-responsive col col-md-12">
        <?php
        $idpengaduan = $_GET['idpengaduan'];
        $no=1;
        $q = "Select * from datapengaduan where idpengaduan = '$idpengaduan' group by idpengaduan ASC";
        $result = mysqli_query($con, $q);
        foreach ($result as $data){
        ?>
        <table class="table table-bordered table-hover table-striped" id="dataTables-example" width="100%">
                <tr><td width="10%">NIK :</td><td><?php echo $data['nik'] ?></td></tr>
                <tr><td width="10%">Isi Pengaduan :</td><td><?php echo $data['isipg'] ?></td></tr>
            </tr>
        </table>
        <br>
        <br>
        <form name="tanggapipeng" method="post" action="../controller/createpengaduan.php">
        <table class="table table-bordered table-hover table-striped" id="dataTables-example" width="100%">
                <tr><td width="10%">Status Pengaduan :</td><td>
                    <select class="form-control" name="statuspengaduan" id="statuspengaduan" >
                            <option value="belum ditanggapi">Belum Ditanggapi</option>
                            <option value="sudah ditanggapi">Sudah Ditanggapi</option>
                    </select></td></tr>
                <tr><td width="10%">No yang menanggapi :</td><td>
                    <select class="form-control" name="ditanggapi" id="ditanggapi"  >
                            <option value"belum diisi">Pilih NIP ANDA</option placeholder="ISI NIP ANDA">
                            <option value="2134565786">2134565786</option>
                            <option value="213243546576">213243546576</option>
                    </select></td></tr>
            </tr>
                <?php
            }
            ?>
        </table>
                <button type="submit" name='inputpengaduan' class="btn btn-success">Tambah</button>
                <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
    <script src="../asset/bootstrap/js/bootstrap.js"></script>
    <script src="../asset/js/jquery-1.10.2.js"></script>
    <script src="../asset/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="../asset/plugins/dataTables/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
</body>
</html>

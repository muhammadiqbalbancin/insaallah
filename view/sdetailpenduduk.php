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
    <div class="table-responsive col col-md-12">
        <?php
        $idpenduduk = $_GET['idpenduduk'];
        $no=1;
        $q = "Select * from datapenduduk where idpenduduk = '$idpenduduk' group by idpenduduk ASC";
        $result = mysqli_query($con, $q);
        foreach ($result as $data){
        $lahir = new DateTime($data['tgllahir']);
        $today = new DateTime();
        $diff = $today->diff($lahir);
        ?>
        <table class="table table-bordered table-hover table-striped" id="dataTables-example" width="100%">
                <tr><td width="10%">Nama Penduduk :</td><td><?php echo $data['namapenduduk'] ?></td></tr>
                <tr><td width="10%">Tempat Lahir :</td><td><?php echo $data['tmptlahir'] ?></td></tr>
                <tr><td width="10%">Tanggal Lahir :</td><td><?php echo $data ['tgllahir'] ?></td></tr>
                <tr><td width="10%">Usia :</td><td><?php echo $diff->y." tahun ".$diff->m." bulan ".$diff->d." hari"?></td></tr>
                <tr><td width="10%">Jenis Kelamin :</td><td><?php echo $data ['jk'] ?></td></tr>
                <tr><td width="10%">Agama :</td><td><?php echo $data['agama']?></td></tr>
                <tr><td width="10%">Status Perkawinan :</td><td><?php echo $data['statusperkawinan'] ?></td></tr>
                <tr><td width="10%">Pekerjaan :</td><td><?php echo $data['pekerjaan'] ?></td></tr>
                <tr><td width="10%">Pendidikan :</td><td><?php echo $data ['pendidikan'] ?></td></tr>
                <tr><td width="10%">Alamat :</td><td><?php echo $data['alamat']?></td></tr>
                <tr><td width="10%">Kelurahan :</td><td><?php echo $data['kelurahan'] ?></td></tr>
                <tr><td width="10%">Status Kematian :</td> <td><?php echo $data['lain'] ?></td></tr>
                <tr><td width="10%">Nomer KK :</td><td><?php echo $data ['nkk'] ?></td></tr>
                <tr><td width="10%">NIK :</td><td><?php echo $data ['nik'] ?></td></tr>
                <tr><td width="10%">Update</td><td><a href="updatependuduk.php?idpenduduk=<?php echo $data['idpenduduk'];?>" <p class="glyphicon glyphicon-edit"></p></></td></tr>
                <tr><td width="10%">Hapus</td><td><a href="../controller/hapuspenduduk.php?idpenduduk=<?php echo $data['idpenduduk'];?>" <p class="glyphicon glyphicon-trash"></p></td></tr>
            </tr>
                <?php
            }
            ?>
        </table>
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

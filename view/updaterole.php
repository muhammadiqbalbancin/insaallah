<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/20/2017
 * Time: 7:53 PM
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


<div class="main" style="margin-50%: auto">
    <hr>
    <div class="col col-md-12">
        <form name="updaterole" method="post" action="../controller/updaterole.php">
            <table class="table table-bordered" width="100%">
                <?php
                $idrole = $_GET['idrole'];
                $q = "Select * from datarole where idrole = '$idrole'";
                $result = mysqli_query($con, $q);
                foreach ($result as $data){
                    ?>
                    <tr>
                        <td>Nama</td>
                        <td>
							<input type="hidden" name="idrole" value="<?php echo $data['idrole'] ?>"></input>
                            <input placeholder="Masukkan Nama Pengguna" class="form-control" type="text" name="nama" value="<?php echo $data['nama'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input placeholder="Masukkan Password" type="" class="form-control" name="password" value="<?php echo $data['password'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <select class="form-control" id="status" name="status" data-placeholder="Pilih Status">
                                <option value="<?php echo $data['status'] ?>" selected><?php echo $data['status'] ?></option>
                                <option>Activated</option>
                                <option>Deactivated</option>
                            </select>
                        </td>
                    </tr>
                        <td colspan="2">
                            <button type="submit" name="updaterole" class="btn btn-danger">Ubah Data</button>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </form>
    </div>
</body>
</html>

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
    <title>Dashboard Administrator Rundeng</title>
</head>

<body>
<div class="header">
    <a href="#" id="menu-action">
        <i class="fa fa-bars"></i>
        <span>Close</span>
    </a>
    <div class="logo">
        Rundeng Admin
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


<div class="main" style="margin-50%: auto">
    <hr>
    <hr>
    <div class="col col-md-12">
        <form name="updateanakyatim" method="post" action="../controller/updateanakyatim.php">
            <table class="table table-bordered" width="100%">
                <?php
                $idanakyatim = $_GET['idanakyatim'];
                $q = "Select * from dataanakyatim where idanakyatim = '$idanakyatim'";
                $result = mysqli_query($con, $q);
                foreach ($result as $data){
                    ?>
                    <tr>
                        <td>Nama</td>
						<input type="hidden" name="idanakyatim" value="<?php echo $data['idanakyatim'] ?>"></input>
                        <td><input placeholder="Masukkan Nama" type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td><input placeholder="Masukkan Tempat Lahir" type="text" class="form-control" name="tempatlahir" value="<?php echo $data ['tempatlahir'] ?>"</td>
                    </tr>
					<tr>
                        <td>Tanggal Lahir</td>
                        <td><input placeholder="Masukkan Tanggal Lahir" type="text" onfocus="(this.type='date')" class="form-control" name="tgllahir" value="<?php echo $data ['tgllahir'] ?>"</td>
                    </tr>
					<tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <select class="form-control" name="jk">
                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                <option>Laki - Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </td>
                    </tr>
					<tr>
                        <td>Alamat</td>
                        <td><input placeholder="Masukkan Alamat" type="text" class="form-control" name="alamat" value="<?php echo $data ['alamat'] ?>"</td>
                    </tr>
					<tr>
                        <td>Status</td>
                        <td>
                            <select class="form-control" id="status" name="status">
                                <option value="" disabled selected>Pilih Status</option>
                                <option>Yatim</option>
                                <option>Piatu</option>
                                <option>Yatim Piatu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="updateanakyatim" class="btn btn-danger">Ubah Data</button>
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

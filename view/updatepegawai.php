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


<div class="main" style="margin-50%: auto">
    <hr>
    <hr>
    <div class="col col-md-12">
        <form name="updatepegawai" method="post" action="../controller/updatepegawai.php">
            <table class="table table-bordered" width="100%">
                <?php
                $idpegawai = $_GET['idpegawai'];
                $q = "Select * from datapegawai where idpegawai = '$idpegawai'";
                $result = mysqli_query($con, $q);
                foreach ($result as $data){
                    ?>
                    <tr>
                        <td>Nip</td>
                        <td>
							<input type="hidden" name="idpegawai" value="<?php echo $data['idpegawai'] ?>"></input>
                            <input placeholder="Masukkan NIP" class="form-control" type="number" name="nip" value="<?php echo $data['nip'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Pegawai</td>
                        <td><input placeholder="Masukkan Nama Pegawai" type="text" class="form-control" name="namapegawai" value="<?php echo $data['namapegawai'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td><input placeholder="Masukkan Tempat Lahir" type="text" class="form-control" name="tmptlahir" value="<?php echo $data ['tmptlahir'] ?>"</td>
                    </tr>
					<tr>
                        <td>Tanggal Lahir</td>
                        <td><input placeholder="Masukkan Tanggal Lahir" type="text" onfocus="(this.type='date')" class="form-control" name="tgllahir" value="<?php echo $data ['tgllahir'] ?>"</td>
                    </tr>
					<tr>
                        <td>Jabatan</td>
                        <td><input placeholder="Masukkan Jabatan" type="text" class="form-control" name="jabatan" value="<?php echo $data ['jabatan'] ?>"</td>
                    </tr>
					<tr>
                        <td>Golongan</td>
                        <td>
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
                        </td>
                    </tr>
					<tr>
                        <td>Status</td>
                        <td>
                            <select class="form-control" name="status">
                                <option value="" disabled selected>Pilih Status</option>
                                <option>Pegawai Negeri Sipil</option>
                                <option>Aparatur</option>
                            </select>
                        </td>
                    </tr>
					 <tr>
                        <td>Aktivasi</td>
                        <td>
                            <select class="form-control" name="aktivasi">
                                <option value="" disabled selected>Pilih Aktivasi</option>
                                <option>Pensiun</option>
                                <option>Belum Pensiun</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="updatepegawai" class="btn btn-danger">Ubah Data</button>
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

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
        <form name="updatewilayah" method="post" action="../controller/updatewilayah.php">
            <table class="table table-bordered" width="100%">
                <?php
                $idpemerintah = $_GET['idwilayah'];
                $q = "Select * from wilayah where idwilayah = '$idwilayah'";
                $result = mysqli_query($con, $q);
                foreach ($result as $data){
                    ?>
                    <tr>
                                  <td>Desa</td>
                                  <td>
                                    <select class="form-control" id="namadesa" name="namadesa">
                                        <option value="" disabled selected>Pilih desa</option>
                                        <option>Buluh Dori</option>
                                        <option>Lae Oram</option>
                                        <option>Makmur Jaya</option>
                                        <option>Mukti Makmur</option>
                                        <option>Pasar Panjang</option>
                                        <option>Pegayo</option>
                                        <option>Sikelondang</option>
                                        <option>Subulussalam</option>
                                        <option>Subulussalam Barat</option>
                                        <option>Subulussalam Selatan</option>
                                        <option>Subulussalam Utara</option>
                                        <option>Suka Makmur</option>
                                        <option>Tangga Besi</option>
                                    </select>
                                  </td>
                              </tr>
                    <tr>
                        <td>Ucapan Selama Datang</td>
                        <td>
							<input type="hidden" name="idwilayah" value="<?php echo $data['idwilayah'] ?>"></input>
                            <input  placeholder="Masukkan Ucapan selamat Datang" class="form-control" type="text" name="judul" value="<?php echo $data['judul'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Desa</td>
                        <td>
							<input  placeholder="Masukkan Nama Desa" class="form-control" type="text" name="judul2" value="<?php echo $data['judul2'] ?>">
						            </td>
                    </tr>
                    <tr>
                        <td>Gambaran Umum Desa</td>
                        <td>
							<textarea  placeholder="Masukkan Gambaran Umum Desa" class="form-control" type="text" name="ketwilayah" value="<?php echo $data['ketwilayah'] ?>"> </textarea>
						            </td>
                    </tr>


                    <tr>
                        <td colspan="2">
                            <button type="submit" name="updatewilayah" class="btn btn-danger">Ubah Data</button>
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

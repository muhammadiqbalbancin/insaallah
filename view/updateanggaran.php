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


<div class="main" style="margin-50%: auto">
    <hr>
    <hr>
    <div class="col col-md-12">
        <form name="updateanggaran" method="post" action="../controller/updateanggaran.php">
            <table class="table table-bordered" width="100%">
                <?php
                $id = $_GET['id'];
                $q = "Select * from anggaran where id = '$id'";
                $result = mysqli_query($con, $q);
                foreach ($result as $data){
                    ?>
                    <tr>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>"></input>
                        <td>Table No</td>
                    <td><select class="form-control" id="tableno" name="tableno">
                            <option value="<?php echo $data['tableno'] ?>" selected><?php echo $data['tableno'] ?></option>
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
                     </td>                      
                    </tr>
                    <tr>
                        <td>Jenis</td>
                        <td><input placeholder="Masukkan Nama Table & Jumlah Anggaran" type="text" class="form-control" name="jenis" id="jenis" value="<?php echo $data['jenis'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input placeholder="Masukkan Nama" class="form-control" type="text" name="nama" value="<?php echo $data['nama'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Anggaran</td>
                        <td><input placeholder="Masukkan Jumlah Anggaran" type="text" class="form-control" name="anggaran" value="<?php echo $data['anggaran'] ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="updateanggaran" class="btn btn-danger">Ubah Data</button>
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
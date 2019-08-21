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
        <form name="updatepemerintah" method="post" action="../controller/updatepemerintah.php">
            <table class="table table-bordered" width="100%">
                <?php
                $idpemerintah = $_GET['idpemerintah'];
                $q = "Select * from pemerintah where idpemerintah = '$idpemerintah'";
                $result = mysqli_query($con, $q);
                foreach ($result as $data){
                    ?>
                    <tr>
                        <td>Tabel</td>
                        <td><select type="hidden" class="form-control" id="tabel" name="table" >
                    <option value="<?php echo $data['tabel'] ?>" selected><?php echo $data['tabel'] ?></option>
                </select></td>                
                    </tr>                            
                    <tr>
                        <input type="hidden" name="idpemerintah" value="<?php echo $data['idpemerintah'] ?>"></input>
                        <td>Nama</td>
                        <td>
                            <input  placeholder="Masukkan Nama" class="form-control" type="text" name="namapemerintah" value="<?php echo $data['namapemerintah'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Nip</td>
                        <td>
							<input  placeholder="Masukkan Nip" class="form-control" type="number" name="nippemerintah" value="<?php echo $data['nippemerintah'] ?>">
						</td>
                    </tr>
					<tr>
                        <td>Jabatan</td>
                        <td>
                            <input  placeholder="Masukan judul" class="form-control" type="text" name="jabatanpemerintah" value="<?php echo $data['jabatanpemerintah'] ?>">
                    </tr>
                        <td>judul Table</td>
                        <td>
                            <input  placeholder="Masukan judul" class="form-control" type="text" name="judul" value="<?php echo $data['judul'] ?>">
                        </td>
                    </tr>
                    <tr>                    
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="updatepemerintah" class="btn btn-danger">Ubah Data</button>
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
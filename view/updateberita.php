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
        <form name="updateberita" enctype="multipart/form-data" method="POST" action="../controller/updateberita.php">
            <table class="table table-bordered" width="100%">
                <?php
                $idberita = $_GET['idberita'];
                $q = "Select * from databerita where idberita = '$idberita'";
                $result = mysqli_query($con, $q);
                foreach ($result as $data){
                    ?>
                    <tr>
                        <td>Judul berita</td>
                        <td>
							<input type="hidden" name="idberita" value="<?php echo $data['idberita'] ?>"></input>
                            <input  placeholder="Masukkan Judul" class="form-control" type="text" name="judulberita" value="<?php echo $data['judulberita'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Isi Berita</td>
                        <td><textarea placeholder="Masukkan Isi" rows="4" cols="50" class="form-control" name="isiberita"><?php echo $data['isiberita'] ?></textarea>
                    </tr>
					<tr>
                        <td>Tipe Berita</td>
                        <td>
                            <select class="form-control" id="tipe" name="tipe">
                                <option value="" disabled selected>Pilih Tipe</option>
                                <option>Berita</option>
                                <option>Informasi</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Publish</td>
                        <td>
                        <script type='text/javascript'>
						    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
							var date = new Date();
							var day = date.getDate();
							var month = date.getMonth();
							var yy = date.getYear();
							var year = (yy < 1000) ? yy + 1900 : yy;
							    document.write(day + " " + months[month] + " " + year);
						</script>                            
                        </td>
                    </tr>
                    <tr>
                    <td for="gambar">Pilih Gambar</td>
                    <td>      <input type="checkbox" name="ubah_gambar" value="true"> Ceklis jika ingin mengubah foto<br>      <input type="file" name="gambar"></td>
                </div>   
                </tr>
                <tr>
                        <td colspan="2">
                            <button type="submit" name="updateberita" class="btn btn-danger">Ubah Data</button>
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

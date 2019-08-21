<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/20/2017
 * Time: 4:31 PM
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
	<h4 style="text-align: center;text-decoration: solid"> Gambaran Umum Desa</h4>
	<hr>
    <div class="row container">
		<div class="col col-md-2">
            <a href="tambahwilayah.php"><button class="form-control btn btn-primary" value="Tambah Gambar Umum Desa" type="button">Tambah Data</button></a>
        </div>
        <form method="post" action="detailwilayah.php">
            <div class="col-md-4">
                <input class="form-control" type="text" value="" name="cari">
            </div>
            <div class="col col-md-2">
                <a href="detailwilayah.php"><button class="form-control btn btn-primary" type="submit" value="carii">Cari Data</button></a>
            </div>
        </form>
    </div>
	<hr>
    <?php
        $aa ="SELECT * FROM wilayah order by idwilayah";
        $asc = 'asc';
        $desc = 'asc';
        if(isset($_GET['orderby'])){
            $orderby = $_GET['orderby'];
            $asc=$_GET['asc'];
         if ($orderby != "" && $asc !=""){
             $aa="SELECT * FROM wilayah order by $orderby $asc";
         }
         if ($asc=='asc'){
             $desc='desc';
         }else
             $desc='asc';
        }
        elseif (isset($_POST['cari'])){
            $cari=$_POST['cari'];
            $aa="SELECT * FROM wilayah WHERE idwilayah like '%$cari%' OR namadesa like '%$cari%' OR judul1 like '%$cari%' OR judul2 like '%$cari%' OR ketwilayah like '%$cari%'";
        }
        else{
            $aa="SELECT * FROM wilayah";
        }

    ?>
    <div class="table-responsive col col-md-12">
        <table class="table table-bordered" width="100%">
			<thead>
				<tr class="table table-primary" style="background-color: #2e6da4">
					<td style="color:black">No</td>
					<td><a href="detailwilayah.php?orderby=namadesa&asc=<?=$desc?>" style="color:black">Desa</a></td>
					<td><a href="detailwilayah.php?orderby=judul1&asc=<?=$desc?>" style="color:black">Ucapan Selamat Datang</td></td>
					<td><a href="detailwilayah.php?orderby=judul2&asc=<?=$desc?>" style="color:black">Nama Desa</td></td>
          <td><a href="detailwilayah.php?orderby=ketwilayah&asc=<?=$desc?>" style="color:black">Gambaran Umum Desa</td></td>
					<td style="color:black">Update</td>
					<td style="color:black">Hapus</td>
				</tr>
			</thead>
            <?php
            $no=1;
            $result = mysqli_query($con, $aa);
            foreach ($result as $data){
                ?>
				<tbody>
					<tr>
						<td><?php echo $no?></td>
						<td><?php echo $data['namadesa'] ?></td>
						<td><?php echo $data['judul1'] ?></td>
						<td><?php echo $data['judul2'] ?></td>
            <td><?php echo $data['ketwilayah'] ?></td>
						<td><a href="../view/updatewilayah.php?idwilayah=<?php echo $data['idwilayah'];?>" <p class="glyphicon glyphicon-edit"></p></td>
						<td><a href="../controller/hapuswilayah.php?idwilayah=<?php echo $data['idwilayah'];?>" <p class="glyphicon glyphicon-remove"></p></td>
					</tr>
				</tbody>
                <?php
                $no++;
            }
            ?>
        </table>
</div>
	<script src="../asset/bootstrap/js/bootstrap.js"></script>
    <script src="../asset/js/jquery-1.10.2.js"></script>
    <script src="../asset/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="../asset/plugins/dataTables/jquery.dataTables.js"></script>
</body>
</html>

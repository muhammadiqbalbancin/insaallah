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
	<h4 style="text-align: center;text-decoration: solid">Data Gambar Dan Pesan Teks</h4>
	<hr>

	<hr>

    <?php
        $aa ="SELECT * FROM runingtext order by idruning";
        $asc = 'asc';
        $desc = 'asc';
        if(isset($_GET['orderby'])){
            $orderby = $_GET['orderby'];
            $asc=$_GET['asc'];
         if ($orderby != "" && $asc !=""){
             $aa="SELECT * FROM runingtext order by $orderby $asc";
         }
         if ($asc=='asc'){
             $desc='desc';
         }else
             $desc='asc';
        }
        elseif (isset($_POST['cari'])){
            $cari=$_POST['cari'];
            $aa="SELECT * FROM runingtext WHERE idruning like '%$cari%' OR tulisanberita like '%$cari%'";
        }
        else{
            $aa="SELECT * FROM runingtext";
        }

    ?>



<?php

//RUNING TEXT  

?>
    
    <div class="table-responsive col col-md-12">
        <table class="table table-bordered" width="100%">
			<thead>
				<tr class="table table-primary" style="background-color: #2e6da4" width="100%">
					<td style="color:black" width="5%">No</td>
					<td stylw="color:black" width="25%">judul text</td>
					<td style="color:black" width="50%">Isi Berita Berjalan</td>
					<td style="color:black" width="20%">Update</td>
				</tr>
			</thead>
            <?php
            $no=1;
            $result = mysqli_query($con, $aa);
            foreach ($result as $data){
                ?>
				<tbody>
					<tr width="100%">
						<td width="5%"><?php echo $no?></td>
						<td width="25%"><?php echo $data['judul'] ?></td>
						<td width="50%"><?php echo $data['tulisanberita'] ?></td>
						<td width="20%"> <a href="updateruningtext.php?idruning=<?php echo $data['idruning'];?>" <p class="glyphicon glyphicon-edit"></p></td>
					</tr>
				</tbody>
                <?php
                $no++;
            }
            ?>
        </table>
</div>



<?php

//Gambar  

?>

    <?php
        $aa ="SELECT * FROM gambarskpd order by idgambar";
        $asc = 'asc';
        $desc = 'asc';
        if(isset($_GET['orderby'])){
            $orderby = $_GET['orderby'];
            $asc=$_GET['asc'];
         if ($orderby != "" && $asc !=""){
             $aa="SELECT * FROM gambarskpd order by $orderby $asc";
         }
         if ($asc=='asc'){
             $desc='desc';
         }else
             $desc='asc';
        }
        elseif (isset($_POST['cari'])){
            $cari=$_POST['cari'];
            $aa="SELECT * FROM gambarskpd WHERE idgambar like '%$cari%' OR gambaraja like '%$cari%'";
        }
        else{
            $aa="SELECT * FROM gambarskpd";
        }

    ?>


    <div class="table-responsive col col-md-12">
        <table class="table table-bordered" width="100%">
			<thead>
				<tr class="table table-primary" style="background-color: #2e6da4" width="100%">
					<td style="color:black" width="5%">No</td>
					<td stylw="color:black" width="25%">Gambar</td>
					<td style="color:black" width="50%">Nama File Gambar</td>
					<td style="color:black" width="20%">Update</td>
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
						<td><img src="../upload/skpd/<?php echo $data['gambaraja'] ?>" style="widht:px; height:40px"></td>
						<td><?php echo $data['gambaraja'] ?></td>
						<td><a href="updategambarskpd.php?idgambar=<?php echo $data['idgambar'];?>" <p class="glyphicon glyphicon-edit"></p></td>
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
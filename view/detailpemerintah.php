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
	<h4 style="text-align: center;text-decoration: solid">Data Pemerintah</h4>
	<hr>
    <div class="row container">
		<div class="col col-md-2">
            <a href="tambahpemerintah.php"><button class="form-control btn btn-primary" value="Tambah Data Pemerintah" type="button">Tambah Data Baru</button></a>
        </div>
    </div>
	<hr>
    <?php
        $aa ="SELECT * FROM pemerintah order by idpemerintah";
        $asc = 'asc';
        $desc = 'asc';
        if(isset($_GET['orderby'])){
            $orderby = $_GET['orderby'];
            $asc=$_GET['asc'];
         if ($orderby != "" && $asc !=""){
             $aa="SELECT * FROM pemerintah order by $orderby $asc";
         }
         if ($asc=='asc'){
             $desc='desc';
         }else
             $desc='asc';
        }
        elseif (isset($_POST['cari'])){
            $cari=$_POST['cari'];
            $aa="SELECT * FROM pemerintah WHERE idpemerintah like '%$cari%' OR namapemerintah like '%$cari%' OR nippemerintah like '%$cari%' OR jabatanpemerintah like '%$cari%' OR gambarpemerintah like '%$cari%'";
        }
        else{
            $aa="SELECT * FROM pemerintah";
        }

    ?>
    <div class="table-responsive col col-md-12">
        <table class="table table-bordered" width="100%">
			<thead>
				<tr class="table table-primary" style="background-color: #2e6da4">
					<td style="color:black">No</td>
					<td><a href="detailpemerintah.php?orderby=namapemerintah&asc=<?=$desc?>" style="color:black">Nama</a></td>
					<td><a href="detailpemerintah.php?orderby=nippemerintah&asc=<?=$desc?>" style="color:black">Nip</td></td>
					<td><a href="detailpemerintah.php?orderby=jabatanpemerintah&asc=<?=$desc?>" style="color:black">Jabatan</td></td>
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
						<td><?php echo $data['namapemerintah'] ?></td>
						<td><?php echo $data['nippemerintah'] ?></td>
						<td><?php echo $data['jabatanpemerintah'] ?></td>
						<td><a href="updatepemerintah.php?idpemerintah=<?php echo $data['idpemerintah'];?>" <p class="glyphicon glyphicon-edit"></p></td>
						<td><a href="../controller/hapuspemerintah.php?idpemerintah=<?php echo $data['idpemerintah'];?>" <p class="glyphicon glyphicon-remove"></p></td>
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
<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/20/2017
 * Time: 4:31 PM
 */
require_once ('../../lib/Dbcon.php');
require_once ('../../lib/Dbcon2.php');

session_start();
if (!isset($_SESSION['pk'])){
    header('location:../../admin/index.php');
}
$user = ['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../asset/css/menu.css">
    <link rel="stylesheet" href="../../asset/bootstrap/css/w3.css">
    <link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../../asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../asset/css/bantu1.css">
    <script src="../../asset/js/bantu1.js"></script>
    <script src="../../asset/bootstrap/js/bootstrap.min.js"></script>
    <title>Dashboard Administrator Simpang Kiri</title>
</head>

<body>
<div class="header">
    <a href="#" id="menu-action">
        <i class="fa fa-bars"></i>
        <span>Close</span>
    </a>
    <div class="logo">
        Simpang Kiri Admin
    </div>

</div>
<div class="sidebar">
    <ul>
        <li><a href="detailpenduduk.php"><i class="fa fa-users"></i><span>Penduduk</span></a></li>
        <li><a href="detailpegawai.php"><i class="fa fa-user-md"></i><span>Pegawai</span></a></li>
        <li><a href="detailberita.php"><i class="fa fa-list-alt"></i><span>Berita</span></a></li>
        <li><a href="detailpengaduan.php"><i class="fa fa-info-circle"></i><span>Pengaduan</span></a></li>
        <li><a href="../../controller/logoutadmin.php"><i class="fa fa-sign-out"></i><span>Keluar</span></a></li>
    </ul>
</div>


<div class="main" style="margin-50%: auto">
    <hr>
	<h4 style="text-align: center;text-decoration: solid">Data Berita</h4>
	<hr>
    <div class="row container">
        <div class="col col-md-2">
            <a href="hdetailberita.php"><button class="form-control btn btn-success" value="Lihat Informasi Jumlah" type="button">Lihat Informasi Jumlah</button></a>
        </div>
        <form method="post" action="detailberita.php">
            <div class="col-md-4">
                <input class="form-control" type="text" value="" name="cari">
            </div>
            <div class="col col-md-2">
                <a href="detailberita.php"><button class="form-control btn btn-primary" type="submit" value="carii">Cari Data</button></a>
            </div>
        </form>
    </div>
	<hr>
    <?php
        $aa ="SELECT & FROM databerita order by idberita";
        $asc = 'asc';
        $desc = 'asc';
        if(isset($_GET['orderby'])){
            $orderby = $_GET['orderby'];
            $asc=$_GET['asc'];
         if ($orderby != "" && $asc !=""){
             $aa="SELECT * FROM databerita order by $orderby $asc";
         }
         if ($asc=='asc'){
             $desc='desc';
         }else
             $desc='asc';
        }
        elseif (isset($_POST['cari'])){
            $cari=$_POST['cari'];
            $aa="SELECT * FROM databerita WHERE judulberita like '%$cari%' OR isiberita like '%$cari%' OR tipe like '%$cari%' OR tglpublish like '%$cari%'";
        }
        else{
            $aa="SELECT * FROM databerita";
        }

    ?>
    <div class="table-responsive col col-md-12">
        <table class="table table-bordered" width="100%">
			<thead>
				<tr class="table table-primary" style="background-color: #2e6da4">
					<td>No</td>
					<td><a href="detailberita.php?orderby=judulberita&asc=<?=$desc?>" >Judul Berita</a></td>
					<td><a href="detailberita.php?orderby=isiberita&asc=<?=$desc?>">Isi Berita</td></td>
					<td><a href="detailberita.php?orderby=tipe&asc=<?=$desc?>">Tipe</td></td>
					<td><a href="detailberita.php?orderby=tglpublish&asc=<?=$desc?>">Tanggal Publish</td></td>
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
						<td><?php echo $data['judulberita'] ?></td>
						<td><?php echo $data['isiberita'] ?></td>
						<td><?php echo $data['tipe'] ?></td>
						<td><?php echo $data ['tglpublish'] ?></td>
					</tr>
				</tbody>
                <?php
                $no++;
            }
            ?>
        </table>
</div>
	<script src="../../asset/bootstrap/js/bootstrap.js"></script>
    <script src="../../asset/js/jquery-1.10.2.js"></script>
    <script src="../../asset/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="../../asset/plugins/dataTables/jquery.dataTables.js"></script>
</body>
</html>
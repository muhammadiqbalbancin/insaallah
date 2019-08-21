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
	<h4 style="text-align: center;text-decoration: solid">Data Arsip Layanan</h4>
	<hr>
    <div class="row container">
		<div class="col col-md-2">
            <a href="tambaharsiplayanan.php"><button class="form-control btn btn-primary" value="Tambah Data Baru" type="button">Tambah Data Baru</button></a>
        </div>
        <form method="post" action="detailarsiplayanan.php">
            <div class="col-md-4">
                <input class="form-control" type="text" value="" name="cari">
            </div>
            <div class="col col-md-2">
                <a href="detailarsiplayanan.php"><button class="form-control btn btn-primary" type="submit" value="carii">Cari Data</button></a>
            </div>
        </form>
    </div>
	<hr>
    <?php
        $aa ="SELECT * FROM dataarsip order by id";
        $asc = 'asc';
        $desc = 'asc';
        if(isset($_GET['orderby'])){
            $orderby = $_GET['orderby'];
            $asc=$_GET['asc'];
         if ($orderby != "" && $asc !=""){
             $aa="SELECT * FROM dataarsip order by $orderby $asc";
         }
         if ($asc=='asc'){
             $desc='desc';
         }else
             $desc='asc';
        }
        elseif (isset($_POST['cari'])){
            $cari=$_POST['cari'];
            $aa="SELECT * FROM dataarsip WHERE tanggal_upload like '%$cari%' OR nama_file like '%$cari%' OR urlfile like '%$cari%'";
        }
        else{
            $aa="SELECT * FROM dataarsip";
        }

    ?>
    <div class="table-responsive col col-md-12">
        <table class="table table-bordered" width="100%">
			<thead>
				<tr class="table table-primary" style="background-color: #2e6da4">
					<td style="color:black">No</td>
					<td style="color:black"><a href="detailarsiplayanan.php?orderby=nama_file&asc=<?=$desc?>" style="text-decoration:none;color:black">Nama File</a></td>
					<td style="color:black"><a href="detailarsiplayanan.php?orderby=tanggal_upload&asc=<?=$desc?>" style="text-decoration:none;color:black">Tanggal File</a></td>
					<td style="color:black"><a href="detailarsiplayanan.php?orderby=urlfile&asc=<?=$desc?>" style="text-decoration:none;color:black">Url File</a></td>
					<td style="color:black">Update</td>
				</tr>
			</thead>
            <?php
            $no=1;
            $result = mysqli_query($con, $aa);
            foreach ($result as $data){
			$lahir = new DateTime($data['tanggal_upload']);
			$today = new DateTime();
			$diff = $today->diff($lahir);
                ?>
				<tbody>
					<tr>
						<td><?php echo $no?></td>
						<td><?php echo $data['nama_file'] ?></td>
						<td><?php echo $data['tanggal_upload'] ?></td>
						<td><?php echo $data['urlfile'] ?></td>
						<td><a href="updatearsiplayanan.php?id=<?php echo $data['id'];?>" <p class="glyphicon glyphicon-edit"></p></td>
					</tr>
				</tbody>
                <?php
                $no++;
            }
            ?>
        </table>
</div>
</div>
	<script src="../asset/bootstrap/js/bootstrap.js"></script>
    <script src="../asset/js/jquery-1.10.2.js"></script>
    <script src="../asset/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="../asset/plugins/dataTables/jquery.dataTables.js"></script>
</body>
</html>
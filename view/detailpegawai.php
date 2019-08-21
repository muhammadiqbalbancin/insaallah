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
	<h4 style="text-align: center;text-decoration: solid">Data Pegawai</h4>
	<hr>
	 <div class="row container">
        <div class="col col-md-2">
            <a href="hdetailpegawai.php"><button class="form-control btn btn-success" value="Lihat Informasi Jumlah" type="button">Lihat Informasi Jumlah</button></a>
        </div>
		<div class="col col-md-2">
            <a href="tambahpegawai.php"><button class="form-control btn btn-primary" value="Tambah Data Pegawai" type="button">Tambah Data Pegawai</button></a>
        </div>
        <form method="post" action="detailpegawai.php">
            <div class="col-md-4">
                <input class="form-control" type="text" value="" name="cari">
            </div>
            <div class="col col-md-2">
                <a href="detailpegawai.php"><button class="form-control btn btn-primary" type="submit" value="carii">Cari Data</button></a>
            </div>
        </form>
    </div>
	<hr>
    <?php
        $aa ="SELECT & FROM datapegawai order by idpegawai";
        $asc = 'asc';
        $desc = 'asc';
        if(isset($_GET['orderby'])){
            $orderby = $_GET['orderby'];
            $asc=$_GET['asc'];
         if ($orderby != "" && $asc !=""){
             $aa="SELECT * FROM datapegawai order by $orderby $asc";
         }
         if ($asc=='asc'){
             $desc='desc';
         }else
             $desc='asc';
        }
        elseif (isset($_POST['cari'])){
            $cari=$_POST['cari'];
            $aa="SELECT * FROM datapegawai WHERE nip like '%$cari%' OR namapegawai like '%$cari%' OR tmptlahir like '%$cari%' OR tgllahir like '%$cari%' OR jabatan like '%$cari%' OR golongan like '%$cari%' OR aktivasi like '%$cari%' OR status like '%$cari%'";
        }
        else{
            $aa="SELECT * FROM datapegawai";
        }

    ?>
    <div class="table-responsive col col-md-12">
        <table class="table table-bordered" width="100%">
			<thead>
				<tr class="table table-primary" style="background-color: #2e6da4">
					<td style="color:black">No</td>
					<td><a href="detailpegawai.php?orderby=nip&asc=<?=$desc?>"  style="color:black">Nip</a></td>
					<td><a href="detailpegawai.php?orderby=namapegawai&asc=<?=$desc?>" style="color:black">Nama Pegawai</td></td>
					<td><a href="detailpegawai.php?orderby=tmptlahir&asc=<?=$desc?>" style="color:black">Tempat Lahir</td></td>
					<td><a href="detailpegawai.php?orderby=tgllahir&asc=<?=$desc?>" style="color:black">Tanggal Lahir</td></td>
					<td style="color:black">Usia</td>
					<td><a href="detailpegawai.php?orderby=jabatan&asc=<?=$desc?>" style="color:black">Jabatan</a></td>
					<td><a href="detailpegawai.php?orderby=golongan&asc=<?=$desc?>" style="color:black">Golongan</td>
					<td><a href="detailpegawai.php?orderby=aktivasi&asc=<?=$desc?>" style="color:black">Aktivasi</a></td>
					<td><a href="detailpegawai.php?orderby=status&asc=<?=$desc?>" style="color:black">Status</td></td>
					<td style="color:black">Update</td>
					<td style="color:black">Hapus</td>
				</tr>
			</thead>
            <?php
            $no=1;
            $result = mysqli_query($con, $aa);
            foreach ($result as $data){
			$lahir = new DateTime($data['tgllahir']);
			$today = new DateTime();
			$diff = $today->diff($lahir);
             ?>
				<tbody>
					<tr>
						<td><?php echo $no?></td>
						<td><?php echo $data['nip'] ?></td>
						<td><?php echo $data['namapegawai'] ?></td>
						<td><?php echo $data ['tmptlahir'] ?></td>
						<td><?php echo $data ['tgllahir'] ?></td>
						<td><?php echo $diff->y." tahun "?></td>
						<td><?php echo $data['jabatan']?></td>
						<td><?php echo $data['golongan'] ?></td>
						<td><?php echo $data['aktivasi'] ?></td>
						<td><?php echo $data ['status'] ?></td>
						<td><a href="updatepegawai.php?idpegawai=<?php echo $data['idpegawai'];?>" <p style="text-align: center" class="glyphicon glyphicon-edit"></p></td>
						<td><a href="../controller/hapuspegawai.php?idpegawai=<?php echo $data['idpegawai'];?>" <p style="text-align: center" class="glyphicon glyphicon-remove"></p></td>
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

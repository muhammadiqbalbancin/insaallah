<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/20/2017
 * Time: 4:31 PM
 */
require_once ('../lib/Dbcon.php');
require_once ('../lib/Dbcon2.php');
error_reporting(0);
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
    <h4 style="text-align: center;text-decoration: solid">Data Pengaduan</h4>
    <hr>
    <div class="row container">
        <!--<div class="col col-md-2">
            <a href="tambahpengaduan.php"><button class="form-control btn btn-primary" value="Tambah Data Penduduk" type="button">Tambah Data Baru</button></a>
        </div>-->
        <form method="post" action="detailpengaduan.php">
            <div class="col-md-4">
                <input class="form-control" type="text" value="" name="cari" placeholder="Cari Data Pengaduan">
            </div>
            <div class="col col-md-2">
                <a href="detailpengadaun.php"><button class="form-control btn btn-primary" type="submit" value="carii">Cari Data </button></a>
            </div>
        </form>
    </div>
    <hr>
    <?php
        $aa ="SELECT * FROM datapengaduan order by idpengaduan";
        $asc = 'asc';
        $desc = 'asc';
        if(isset($_GET['orderby'])){
        $orderby = $_GET['orderby'];
        $asc=$_GET['asc'];
        if ($orderby != "" && $asc !=""){
            $aa="SELECT * FROM datapengaduan order by $orderby $asc";
        }
        if ($asc=='asc'){
             $desc='desc';
         }else
             $desc='asc';
        }
        elseif (isset($_POST['cari'])){
            $cari=$_POST['cari'];
            $aa="SELECT * FROM datapengaduan WHERE nik like '%$cari%' OR nohp like '%$cari%' OR prioritas like '%$cari%' OR isipg like '%cari%'";
        }
        else{
            $aa="SELECT * FROM datapengaduan";
        }

    ?>
    <div class="table-responsive col col-md-12">
        <table class="table table-bordered" width="100%">
            <thead>
            <tr class="table table-primary" style="background-color: #2e6da4">
                <td style="color:black; text-align: center" width="4%" text-align ="center">No</td>
                <td width="25%"><a href="detailpengaduan.php?orderby=nohp&asc=<?=$desc?>" style="color: black; text-align: center" >Nama</td></td>
                <td style="color: black; text-align: center" width="30%" text-align ="center">Isi Pengaduan</td>
                <td style="color: black; text-align: center" width="30" text-align ="center">Tanggal Komentar</td>
                <!--<td style="color: black" width="5%">Update</td>-->
                <td style="color: black; text-align: center" width="5" text-align ="center">Hapus</td>

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
                    <td><?php echo $data ['nohp'] ?></td>
                    <td width="100"><textarea  class="form-active" rows="2" cols="30" maxlength="100" style="border:solid 0px " readonly="readonly" ><?php echo $data['isipg'] 
                    ?> </textarea></td>
                    <td style="text-align: center"><?php echo $data ['tanggalpengaduan'] ?></td>
						<td><a href="../controller/hapuspengaduan.php?idpengaduan=<?php echo $data['idpengaduan'];?>" <p class="glyphicon glyphicon-remove"></p></td>
                    <!--<td> <a href="sdetailpengaduan.php?idpengaduan=<?php echo $data['idpengaduan'];?>" <p style="text-align: center" class="glyphicon glyphicon-edit"></p></a></td>-->
                    <!--
                     <a href="sdetailpengaduan.php?idpengaduan=<?php echo $data['idpengaduan'];?>" <p style="text-align: left" >lihat lainny</a>
                     


                    <td><p rows="4" cols="50" maxlength="50" ><?php echo $data['isipg'] 
                    ?></p> <a href=""></a></td>-->
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
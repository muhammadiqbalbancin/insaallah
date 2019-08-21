
<?php
require_once ('../lib/Dbcon.php');
require_once ('../lib/Dbcon2.php');
?>



<!DOCTYPE html>
<html>
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
    <style media="screen">
    .h{
        background-color: 	#DDDDDF;
    }
    #table1 {
        border-collapse: collapse;
        border: 0px solid black;
    }
        td, th {

        border: ;
        text-align: left;
        padding: 5px;
        color: black;
    }



        tr:nth-child(even){
        background-color: 	#E0EDD5;
    }
    tr:hover th,
    tr:hover td {
			background-color: "#ffffa2";
			border-color: "#ffff0f";
			transition: all .2s;
		}
    </style>
    <title>Rincian Anggaran</title>
  </head>
  <body>
    <div>
        <div class="col col-sm-12 col-xs-12 col-md-12">
          <h3 align="center"> <b>  Anggaran Tahun 2019</b></h3>
              <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 1'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                  
              </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 1' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td>Rp</td>
              <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>
          </table>
            <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 2'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                      
            </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 2' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
              <tr style="background-color: " class="h">
                  <td><?php echo $isi['nama'] ?></td>
                  <td border='0'>Rp</td>
                  <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
              </tr>
                <?php
                    }
                ?>
          </table>
            <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 3'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>      
            </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 3' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
          <tr style="background-color: " class="h">
            <td><?php echo $isi['nama'] ?></td>
            <td>Rp</td>
            <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
          </tr>
                <?php
                    }
                ?>          
          </table>
            <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 4'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>      
            </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 4' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td >Rp</td>
                <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>                
          </table>
              <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 5'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                  
              </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 5' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td>Rp</td>
              <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>
          </table>
              <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 6'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                  
              </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 6' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td>Rp</td>
              <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>
          </table>
              <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 7'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                  
              </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 7' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td>Rp</td>
              <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>
          </table>
              <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 8'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                  
              </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 8' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td>Rp</td>
              <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>
          </table>
              <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 9'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                  
              </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 9' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td>Rp</td>
              <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>
          </table>
              <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 10'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                  
              </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 10' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td>Rp</td>
              <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>
          </table>
              <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 11'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                  
              </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 11' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td>Rp</td>
              <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>
          </table>
              <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 12'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                  
              </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 12' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td>Rp</td>
              <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>
          </table>
              <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 13'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                  
              </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 13' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td>Rp</td>
              <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>
          </table>
              <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 14'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                  
              </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 14' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td>Rp</td>
              <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>
          </table>
              <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 15'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                  
              </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 15' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td>Rp</td>
              <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>
          </table>
              <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 16'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                  
              </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 16' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td>Rp</td>
              <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>
          </table>
              <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 17'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                  
              </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 17' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td>Rp</td>
              <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>
          </table>
              <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 18'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                  
              </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 18' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td>Rp</td>
              <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>
          </table>
              <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 19'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                  
              </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 19' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td>Rp</td>
              <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>
          </table>
              <h4>
                <?php
                    require_once ('../lib/Dbcon.php');
                    $q="SELECT jenis as  a FROM anggaran where tableno='Table 20'";
                    $hasil=mysqli_query($con,$q);
                    $hasil2= $hasil->fetch_assoc()?>
                    <?= $hasil2['a'];
                ?>                  
              </h4>
          <table class="table-responsive" style="border: 0px solid black">
                <?php
                    $berita ="SELECT * FROM anggaran where tableno='Table 20' order by id ASC";
                    $baca = mysqli_query($con,$berita);
                    foreach ($baca as $isi){
                ?>
            <tr style="background-color: " class="h">
              <td><?php echo $isi['nama'] ?></td>
              <td>Rp</td>
              <td style="width:35%;text-align:right"><?php echo $isi['anggaran'] ?></td>
            </tr>
                <?php
                    }
                ?>
          </table>
          <br><br>
          <p style="text-align: center">&copy; 2019</p>
        </div>
    </div>
  </body>
</html>

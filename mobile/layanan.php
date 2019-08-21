<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 12/10/2017
 * Time: 10:54 PM
 */
require_once ('../lib/Dbcon.php');
require_once ('../lib/Dbcon2.php');
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
    <style>
          body {font-family: Arial;}

          /* Style the tab */
          .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
          }

          /* Style the buttons inside the tab */
          .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
          }

          /* Change background color of buttons on hover */
          .tab button:hover {
            background-color: #ddd;
  }

          /* Create an active/current tablink class */
          .tab button.active {
            background-color: ;
          }

          /* Style the tab content */
          .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid ;
            border-top: none;
          }
          
          /*Style for table*/
          table.fixed {
              table-layout:fixed; width:100%; ;
          }
          table.fixed td{
              overflow:hidden
          }
          table.fixed td:nth-of-type(1){
              width:11%;
          }
          table.fixed td:nth-of-type(2){
              width:23%;
          }
          table.fixed td:nth-of-type(3){
              width:43%;
          }
          table.fixed td:nth-of-type(4){
              width:%;
          }
      </style>
</head>
<body>

  <div class="col col-sm-12 col-xs-12 col-md-12">
<h3 style="text-align:center;">Pilih Menu Arsip atau Komentar</h3>
    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'London')" >Arsip</button>
      <button class="tablinks" onclick="openCity(event, 'Paris')">Isi komentar</button>
      <button class="tablinks" onclick="openCity(event, 'Tokyo')">komentar Publik</button>
    </div>

    <div id="London" class="tabcontent">
          <h4 style="text-align: center;text-decoration: solid;"><b>Download File dan Arsip</b></h4>
    <table class="table" width="100%" cellpadding="3" cellspacing="0" border="0">
        <?php
        $arsip ="SELECT * FROM dataarsip order by id DESC";
        $baca = mysqli_query($con,$arsip);
        foreach ($baca as $isi){
        ?>
        <tr>
            <td style="text-align: left"><a href="<?php echo $isi['urlfile'] ?>"><?php echo $isi['nama_file']?></a></td>
            <td style="text-align: right"><?php echo $isi['tanggal_upload']?></td>
        </tr>
        <?php } ?>
    </table>
    </div>
        <div id="Paris" class="tabcontent">
            <form name="inputpengaduan" method="post" action="../controller/createpengaduan.php">
				<div class="form-group">
					  <label for="nohp">Nama</label>
					  <input placeholder="Masukan Nama" type="text" class="form-control" name="nohp" id="nohp" >
				</div>
				<div class="form-group">
					  <label for="isipg">Isi Komentar</label>
					  <textarea placeholder="Masukkan Isi Komentar" rows="4" cols="50" class="form-control" name="isipg" id="isipg" ></textarea>
				</div>
				<div class="form-group" id="/*tanggalpengaduan*/">
					  		<script type='text/javascript'>
        
    		   var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    		   var date = new Date();
    		   var day = date.getDate();
    		   var month = date.getMonth();
    		   var yy = date.getYear();
    		   var year = (yy < 1000) ? yy + 1900 : yy;
    		   document.write(day + " " + months[month] + " " + year);
    		</script>
				</div>
				<button type="submit" name='inputpengaduan' class="btn btn-success">Tambah</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</form>
    </div>

    <div id="Tokyo" class="tabcontent">
      <table class="table table-bordered fixed" >
<thead>
  <tr class="table table-primary" style="background-color: #2e6da4">
    <td>No</td>
    <td>Nama</td>
    <td>Isi Komentar</td>
    <td>tanggal Komentar</td>
  </tr>
</thead>
      
      <?php
      $aa="SELECT * FROM datapengaduan order by idpengaduan DESC";
      $no=1;
      $result = mysqli_query($con, $aa);
      foreach ($result as $data){
          ?>
  <tbody>
    <tr>
      <td><?php echo $no?></td>
      <td style="word-break:break-all"><?php echo $data['nohp'] ?></td>
      <td style="word-break:break-all"><?php echo $data['isipg'] ?></td>
      <td><?php echo $data['tanggalpengaduan'] ?></td>
    </tr>
  </tbody>
          <?php
          $no++;
      }
      ?>
  </table>
    </div>


  </div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

</body>
</html>

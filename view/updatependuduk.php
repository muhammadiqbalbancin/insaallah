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
    <hr>
    <div class="col col-md-12">
        <form name="updatependuduk" method="post" action="../controller/updatependuduk.php">
            <table class="table table-bordered" width="100%">
                <?php
                $idpenduduk = $_GET['idpenduduk'];
                $q = "Select * from datapenduduk where idpenduduk = '$idpenduduk'";
                $result = mysqli_query($con, $q);
                foreach ($result as $data){
                    ?>
                    <tr>
                        <td>Nama Penduduk :</td>
                        <td>
                            <input type="hidden" name="idpenduduk" value="<?php echo $data['idpenduduk'];?>">
                            <input class="form-control" type="text" name="namapenduduk" value="<?php echo $data['namapenduduk'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat lahir</td>
                        <td><input type="text" class="form-control" name="tmptlahir" value="<?php echo $data['tmptlahir'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><input type="date" class="form-control" name="tgllahir" value="<?php echo $data ['tgllahir'] ?>"</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <select class="form-control" name="jk">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Agama :</td>
                        <td>
                            <select class="form-control" id="agama" name="agama">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Kristen Khatolik</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>Konghucu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Status Perkawinan :</td>
                        <td>
                            <select class="form-control" id="statusperkawinan" name="statusperkawinan">
                                <option>Sudah Kawin</option>
                                <option>Belum Kawin</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>
                            <select class="form-control" id="pekerjaan" name="pekerjaan">

                                <option>	TNI	</option>
                                <option>	Belum / Tidak Bekerja	</option>
                                <option>	Mengurus Rumah Tangga	</option>
                                <option>	Pelajar / Mahasiswa	</option>
                                <option>	PNS	</option>
                                <option>	POLRI	</option>
                                <option>	Pensiunan	</option>
                                <option>	Perdagangan	</option>
                                <option>	Petani/Pekebun	</option>
                                <option>	Peternak	</option>
                                <option>	Nelayan/Perikanan	</option>
                                <option>	Industri	</option>
                                <option>	Konstruksi	</option>
                                <option>	Transportasi	</option>
                                <option>	Karyawan Swasta	</option>
                                <option>	Karyawan BUMN	</option>
                                <option>	Karyawan BUMD	</option>
                                <option>	Karyawan Honorer	</option>
                                <option>	Buruh Harian Lepas	</option>
                                <option>	Buruh Tani/Perkebunan	</option>
                                <option>	Buruh Nelayan/Perikanan	</option>
                                <option>	Buruh Peternakan	</option>
                                <option>	Pembantu Rumah Tangga	</option>
                                <option>	Tukang Cukur	</option>
                                <option>	Tukang Listrik	</option>
                                <option>	Tukang Batu	</option>
                                <option>	Tukang Kayu	</option>
                                <option>	Tukang Sol Sepatu	</option>
                                <option>	Tukang Las/Pandai Besi	</option>
                                <option>	Tukang Jahit	</option>
                                <option>	Tukang Gigi	</option>
                                <option>	Penata Rias	</option>
                                <option>	Penata Busana	</option>
                                <option>	Penata Rambut	</option>
                                <option>	Mekanik	</option>
                                <option>	Seniman	</option>
                                <option>	Tabib	</option>
                                <option>	Paraji	</option>
                                <option>	Perancang Busana	</option>
                                <option>	Penterjemah	</option>
                                <option>	Imam Mesjid	</option>
                                <option>	Pendeta	</option>
                                <option>	Pastor	</option>
                                <option>	Wartawan	</option>
                                <option>	Ustad/Mubaligh	</option>
                                <option>	Juru Masak	</option>
                                <option>	Promotor Acara	</option>
                                <option>	Anggota DPR RI	</option>
                                <option>	Anggota DPD RI	</option>
                                <option>	Anggota BPK	</option>
                                <option>	Anggota Mahkamah Konstitusi	</option>
                                <option>	Anggota Kabinet	</option>
                                <option>	Duta Besar	</option>
                                <option>	Gubernur	</option>
                                <option>	Wakil Gubernur	</option>
                                <option>	Bupati	</option>
                                <option>	Wakil Bupati	</option>
                                <option>	Walikota	</option>
                                <option>	Wakil Walikota	</option>
                                <option>	Anggota DPRD PROV	</option>
                                <option>	Anggota DPRD Kab/Kota	</option>
                                <option>	Dosen	</option>
                                <option>	Guru	</option>
                                <option>	Pilot	</option>
                                <option>	Pengacara	</option>
                                <option>	Notaris	</option>
                                <option>	Arsitek	</option>
                                <option>	Akuntan	</option>
                                <option>	Konsultan	</option>
                                <option>	Dokter	</option>
                                <option>	Perawat	</option>
                                <option>	Apoteker	</option>
                                <option>	Psikiater/psikolog	</option>
                                <option>	Penyiar Televisi	</option>
                                <option>	Penyiar Radio	</option>
                                <option>	Pelaut	</option>
                                <option>	Peneliti	</option>
                                <option>	Sopir	</option>
                                <option>	Pialang	</option>
                                <option>	Paranormal	</option>
                                <option>	Pedagang	</option>
                                <option>	Perangkat Desa	</option>
                                <option>	Kepala Desa	</option>
                                <option>	Biarawan/Biarawati	</option>
                                <option>	Wiraswasta	</option>
                                <option>	Pekerjaan Lainnya	</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan : </td>
                        <td>
                            <select class="form-control" id="pendidikan" name="pendidikan">
                                <option>Belum Sekolah</option>
                                <option>Pendidikan Anak Usia Dini (PAUD)</option>
                                <option>Taman Kanak-kanak (TK)</option>
                                <option>Sekolah Dasar (SD)</option>
                                <option>Sekolah Menengah Pertama (SMP)</option>
                                <option>Sekolah Menengah Atas (SMA)</option>
                                <option>Program Diploma (D3)</option>
                                <option>Program Sarjana (S1)</option>
                                <option>Program Magister (S2)</option>
                                <option>Program Doktor (S3)</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat :</td>
                        <td>
                            <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Kelurahan :</td>
                        <td>
                            <select class="form-control" id="kelurahan" name="kelurahan">
                                <option>Kampong Bangun Sari</option>
                                <option>Kampong Bukit Alim</option>
                                <option>Kampong Darul Aman</option>
                                <option>Kampong Darussalam</option>
                                <option>Kampong Lae Saga</option>
                                <option>Kampong Longkib</option>
                                <option>Kampong Panji</option>
                                <option>Kampong Sikelondang</option>
                                <option>Kampong Rantau Panjang</option>
                                <option>Kampong Sepang</option>
                                <option>Kampong Sikerabang</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Status Kematian :</td>
                        <td>
                            <select class="form-control" id="lain" name="lain">
                                <option>Masih Hidup</option>
                                <option>Sudah Meninggal</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Kartu Keluarga :</td>
                        <td><input type="number" name="nkk" class="form-control" value="<?php echo $data['nkk']?>"></td>
                    </tr>
                    <tr>
                        <td>Nomor Induk Kependudukan</td>
                        <td><input type="number" class="form-control" name="nik" value="<?php echo $data['nik']?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="updatependuduk" class="btn btn-danger">Ubah Data</button>
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

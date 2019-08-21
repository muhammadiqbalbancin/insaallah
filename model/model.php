<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/20/2017
 * Time: 2:04 PM
 */

require_once ('../lib/Dbcon.php');

class input{
    private $con;
    public function input(){
        $this->con = new DBClass();
        $this->con->connect();
    }

    //CREATE
    public function createpegawai ($nip,$namapegawai,$tmptlahir,$tgllahir,$jabatan,$golongan,$aktivasi,$status){
        $query = "insert into datapegawai (nip,namapegawai,tmptlahir,tgllahir,jabatan,golongan,aktivasi,status) VALUES ('$nip','$namapegawai','$tmptlahir','$tgllahir','$jabatan','$golongan','$aktivasi','$status')";
        $this->con->putRows($query);
    }
    public function createberita ($judulberita,$isi,$tipe,$tglpublish,$gambar){
        $query = "insert into databerita (judulberita,isiberita,tipe,tglpublish,gambar) VALUES ('$judulberita','$isi','$tipe','$tglpublish','$gambar')";
        $this->con->putRows($query);
    }
    public function createrole ($nama,$password,$status){
        $query = "insert into datarole (nama,password,status) VALUES ('$nama','$password','$status')";
        $this->con->putRows($query);
    }
    public function creatependuduk ($namapenduduk,$tmptlahir,$tgllahir,$jk,$agama,$statusperkawinan,$pekerjaan,$pendidikan,$kewarganegaraan,$alamat,$kelurahan,$lain,$nkk,$nik){
        $query = "insert into datapenduduk (namapenduduk,tmptlahir,tgllahir,jk,agama,statusperkawinan,pekerjaan,pendidikan,kewarganegaraan,alamat,kelurahan,lain,nkk,nik)
                  values ('$namapenduduk','$tmptlahir','$tgllahir','$jk','$agama','$statusperkawinan','$pekerjaan','$pendidikan','WNI','$alamat','$kelurahan','$lain','$nkk','$nik')";
        $this->con->putRows($query);
    }
    public function createpengaduan ($idpengaduan,$nohp,$isipg,$tanggalpengaduan){
        $query = "insert into datapengaduan (idpengaduan,nohp,isipg,tanggalpengaduan) VALUES ('$idpengaduan','$nohp','$isipg',now())";
        $this->con->putRows($query);
    }
   public function createanggaran ($tableno,$jenis,$nama,$anggaran){
        $query = "insert into anggaran (tableno,jenis,nama,anggaran) VALUES ('$tableno','$jenis','$nama','$anggaran')";
        $this->con->putRows($query);
    }
    public function createpemerintah ($table,$judul,$namapemerintah,$nippemerintah,$jabatanpemerintah){
        $query = "insert into pemerintah (tabel,judul,namapemerintah,nippemerintah,jabatanpemerintah) VALUES ('$table','$judul','$namapemerintah','$nippemerintah','$jabatanpemerintah')";
        $this->con->putRows($query);
    }
    public function creategambarskpd ($gambaraja){
        $query = "insert into gambarskpd (gambaraja) VALUES ('$gambaraja')";
        $this->con->putRows($query);
    }    
        public function createarsiplayanan ($tanggal_upload,$nama_file,$urlfile){
        $query = "insert into dataarsip (tanggal_upload,nama_file,urlfile) VALUES (now(),'$nama_file','$urlfile')";
        $this->con->putRows($query);
    }    
        public function createwilayah ($namadesa,$judul1,$judul2,$ketwilayah){
        $query = "insert into wilayah (namadesa,judul1,judul2,ketwilayah) VALUES ('$namadesa','$judul1','$judul2','$ketwilayah')";
        $this->con->putRows($query);
    }
    
    //UPDATE
    
    public function updatependuduk ($idpenduduk, $namapenduduk,$tmptlahir,$tgllahir,$jk,$agama,$statusperkawinan,$pekerjaan,$pendidikan,$kewarganegaraan,$alamat,$kelurahan,$lain,$nkk,$nik){
        $query = "update datapenduduk set namapenduduk='$namapenduduk', tmptlahir='$tmptlahir', tgllahir='$tgllahir', jk='$jk', agama='$agama', statusperkawinan='$statusperkawinan', pekerjaan='$pekerjaan', pendidikan='$pendidikan', kewarganegaraan='WNI', alamat='$alamat', kelurahan='$kelurahan', lain='$lain',nkk='$nkk',nik='$nik'
                  where idpenduduk='$idpenduduk'";
        $this->con->putRows($query);

    }
    public function updatepegawai ($idpegawai, $nip,$namapegawai,$tmptlahir,$tgllahir,$jabatan,$golongan,$aktivasi,$status){
        $query = "update datapegawai set nip='$nip', namapegawai='$namapegawai', tmptlahir='$tmptlahir', tgllahir='$tgllahir',jabatan='$jabatan', golongan='$golongan', aktivasi='$aktivasi',status='$status'
                  where idpegawai='$idpegawai'";
        $this->con->putRows($query);
    }
    public function updaterole ($idrole,$nama,$password,$status){
        $query = "update datarole set nama='$nama',password='$password',status='$status' where idrole='$idrole'";
        $this->con->putRows($query);
    }
    public function updateberita ($idberita, $judulberita, $isiberita, $tipe, $gambar){
        $query = "update databerita set judulberita='$judulberita', isiberita='$isiberita', tipe='$tipe', tglpublish= now(), gambar='$gambar'  where idberita='$idberita'";
        $this->con->putRows($query);
    }
    public function updateanggaran ($id, $tableno, $jenis, $nama, $anggaran){
        $query = "update anggaran set tableno='$tableno', jenis='$jenis', nama='$nama', anggaran='$anggaran' where id='$id'";
        $this->con->putRows($query);
    }
    public function updategambarskpd ($idgambar, $gambaraja){
        $query = "update gambarskpd set gambaraja='$gambaraja' where idgambar='$idgambar'";
        $this->con->putRows($query);
    }
    public function updatearsiplayanan ($id,$tanggal_upload,$nama_file,$urlfile){
        $query = "update dataarsip set tanggal_upload=now(), nama_file='$nama_file', urlfile='$urlfile' where id='$id'";
        $this->con->putRows($query);
    }
    public function updatepemerintah ($idpemerintah,$table,$judul, $namapemerintah,$nippemerintah,$jabatanpemerintah){
        $query = "update pemerintah set tabel='$table',judul='$judul',namapemerintah='$namapemerintah', nippemerintah='$nippemerintah',jabatanpemerintah='$jabatanpemerintah' where idpemerintah='$idpemerintah'";
        $this->con->putRows($query);
    }
    public function updatewilayah ($idwilayah, $namadesa, $judul1, $judul2, $ketwilayah){
        $query = "update wilayah set namadesa='$namadesa', judul1='$judul1', judul2='$judul2', ketwilayah='$ketwilayah' where idwilayah='$idwilayah'";
        $this->con->putRows($query);
    }
    public function updateruningtext ($idruning, $judul, $tulisanberita) {
        $query = "update runingtext set judul='$judul', tulisanberita='$tulisanberita' where idruning='$idruning'";
        $this->con->putRows($query);
    }
    
    //DELETE
    
    public function deletependuduk($idpenduduk){
        $query ="delete from datapenduduk where idpenduduk = '$idpenduduk'";
        $this->con->putRows($query);
    }
    public function deletepengaduan($idpengaduan){
        $query ="delete from datapengaduan where idpengaduan = '$idpengaduan'";
        $this->con->putRows($query);
    }    
    public function deletepegawai($idpegawai){
        $query = "delete from datapegawai where idpegawai = '$idpegawai'";
        $this->con->putRows($query);
    }
    public function deleterole($idrole){
        $query = "delete from datarole where idrole='$idrole'";
        $this->con->putRows($query);
    }
    public function deleteberita ($idberita){
        $query = "delete from databerita where idberita='$idberita'";
        $this->con->putRows($query);
    }    
    public function deleteanggaran ($id){
        $query = "delete from anggaran where id='$id'";
        $this->con->putRows($query);
    }
    public function deletepemerintah ($idpemerintah){
        $query = "delete from pemerintah where idpemerintah='$idpemerintah'";
        $this->con->putRows($query);
    }
    public function deletewilayah($idwilayah){
        $query = "delete from wilayah where idwilayah='$idwilayah'";
        $this->con->putRows($query);
    }        
    public function filterpenduduk($filter){
        $query = "SELECT * from datapenduduk order by $filter";
        $this->con->putRows($query);
    }
    public function deletegambarskpd($idgambarskpd){
        $query = "delete from gambarskpd where idgambarskpd='$idgambarskpd'";
        $this->con->putRows($query);
    }    
    public function loginadmin($username,$password){
        $query="SELECT * FROM datarole WHERE nama='$username' and password='$password' and status='Activated' and idrole='1'";
        $q = $this->con->read($query);
        if (mysqli_num_rows($q)>0){
            $h = mysqli_fetch_array($q);
            $idUser = $h['iduser'];
            return $idUser;
        }
        else
            return -1;
    }
    public function loginpegawai($username,$password){
        $query="SELECT * FROM datarole WHERE nama='$username' and password='$password' and status='Activated' and idrole NOT LIKE '1'";
        $q = $this->con->read($query);
        if (mysqli_num_rows($q)>0){
            $h = mysqli_fetch_array($q);
            $idUser = $h['iduser'];
            return $idUser;
        }
        else
            return -1;
    }
}

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
    	public function createanakyatim ($nama,$tempatlahir,$tgllahir,$jk,$alamat,$status){
        $query = "insert into dataanakyatim (nama,tempatlahir,tgllahir,jk,alamat,status) VALUES ('$nama','$tempatlahir','$tgllahir','$jk','$alamat','$status')";
        $this->con->putRows($query);
    }
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
    public function updateberita ($idberita, $judulberita, $isiberita, $tglpublish){
        $query = "update databerita set judlberita='$judulberita', isiberita='$isiberita',tglpublish='$tglpublish' where idberita='$idberita'";
        $this->con->putRows($query);
    }
    public function updateanakyatim ($idanakyatim,$nama,$tempatlahir,$tgllahir,$jk,$alamat,$status){
        $query = "update dataanakyatim set nama='$nama',tempatlahir='$tempatlahir',tgllahir='$tgllahir',jk='$jk',alamat='$alamat',status='$status' where idanakyatim='$idanakyatim'";
        $this->con->putRows($query);
    }
    public function deletependuduk($idpenduduk){
        $query ="delete from datapenduduk where idpenduduk = '$idpenduduk'";
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
    public function deleteanakyatim ($idanakyatim){
        $query = "delete from dataanakyatim where idanakyatim='$idanakyatim'";
        $this->con->putRows($query);
    }
    public function filterpenduduk($filter){
        $query = "SELECT * from datapenduduk order by $filter";
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

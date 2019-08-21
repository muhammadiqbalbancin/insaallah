<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/20/2017
 * Time: 2:02 PM
 */
	class DBClass
    {
        public $db, $dbname, $rowColl;
        public $host, $user, $password;
        function __construct()
        {
            $this->db = false;
            $this->dbname = 'ketapangindah';
            $this->host   = 'localhost';
            $this->user   = 'root';
            $this->password = '';
        }
        function connect()
        {
            $this->db = mysqli_connect(
                $this->host,
                $this->user,
                $this->password,
                $this->dbname)
            or die("Database Connection Access Error..".mysqli_error($this->db));
        }


        function close()
        {
            mysqli_close($this->db) or die ("Database Access Error...".mysqli_error($this->db));
            $this->db = false;
        }

        function getRow($sql)
        {
            if(!is_resource($this->db)) $this->connect();

            $rr = mysqli_query($this->db, $sql) or die("Error : ".mysqli_error($this->db));

            if( mysqli_num_rows($rr) > 0)
            {
                $q = mysqli_fetch_array($rr);
            }

            return $q;
        }

        function getRows($sql)
        {
            if(!is_resource($this->db)) $this->connect();

            $this->rowColl = mysqli_query($this->db, $sql) or die("Error : ".mysqli_error($this->db));
            $rows  = array();

            if( count($this->rowColl) > 1) mysqli_data_seek($this->rowColl,0);

            while ($row = mysqli_fetch_array($this->rowColl))
                $rows[] = $row;

            return $rows;
        }

        function putRows($sql)
        {
            if(!is_resource($this->db)) $this->connect();
            mysqli_query($this->db, $sql)
            or die("Qry : " . $sql . "Insertion/Updation Error...." . mysqli_error($this->db));
        }
        function read($sql){
            $q = mysqli_query($this->db,$sql);

            return $q;
        }
    }
?>

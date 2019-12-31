<?php

class Connection
{
    var $servername = "localhost";
    var $dbname = "PCWebsite";
    var $username = "root";
    var $pass = "";
    var $conn;

    function connect(){
        $this->conn = mysqli_connect($this->servername, $this->username, $this->pass);
        $db = mysqli_select_db($this->conn, $this->dbname);
        if($this->conn->connect_error)
            die("Connection failed: ".$this->conn->connect_error);

    }

    function disconnect()
    {
        if(isset($this->conn))
            mysqli_close($this->conn);

    }

    function returnConn()
    {
        return $this->conn;
    }
}
?>
<?php

require_once("Connection.php");
class User_Data extends Connection
{
    function insert($uname, $email, $pass, $country, $gender, $type)
    {
        parent::connect();

        $query = "insert into user (uname, uemail,upass, ucountry, ugender, utype) values ('$uname', '$email','$pass' ,'$country','$gender','$type')";
        if (mysqli_query(parent::returnConn(), $query)) {
            echo "<p class='alert alert-info'>Hooraayy! you got an account.</p>";
        } else {
            echo "Error: " . $query . "" . mysqli_error(parent::returnConn());
        }
        parent::disconnect();

    }


    function  selectAll()
    {
        parent::connect();
        $sql = "select * from user";
        $query = mysqli_query(parent::returnConn(), $sql);
        $rowsNum = mysqli_num_rows($query);
      //  echo '<table class = "table table-responsive table-bordered table-hover">';
        for ($i = 0; $i < $rowsNum; $i++) {
          //  echo "<tr>";
            $row = mysqli_fetch_assoc($query);
            $arr[$i][0] = $row["uid"] ;
            $arr[$i][1] =  $row["uname"] ;
            $arr[$i][2] =  $row["uemail"] ;
            $arr[$i][3] =  $row["upass"] ;
            $arr[$i][4] =  $row["ucountry"] ;
            $arr[$i][5] = $row["ugender"] ;
            $arr[$i][6] =  $row["utype"];
        //    echo "</tr>";
        }
       // echo "</table>";
        parent::disconnect();
        return $arr;
    }


}
<?php

require_once("Classes\Connection.php");
require_once("Classes\PC_Data.php");
require_once("Classes\User_Data.php");

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$country = $_POST['country'];
$gender = $_POST['gender'];
$accountType = $_POST['accountType'];
$connection = new Connection();
$connection->connect();

$sql = "Select * from user where uemail = '$email'";
$query = mysqli_query($connection->returnConn(), $sql);
if ($query != null) {
    $rowNum = mysqli_num_rows($query);
    $row = mysqli_fetch_assoc($query);
    $user_id = $row["uid"];
}

//  echo"rowNum = ".$rowNum;
if ($rowNum >= 1) //logged in has account
{

    echo"<script>alert('Oops, This email is already in use!\\nTry using another email, or login.');</script>";
}
else{
    $userData = new User_Data();
    $userData->insert($name, $email, $pass,$country,$gender,$accountType);
    echo"<script>alert('Yaayy, Account created successfully!');</script>";
}
echo"<script>window.location.href = 'one.html';</script>";


//$pcname = "device one";
//$pcprice = 3499;
//$pcdesc = "this is some description act as you\'re reading something";
//$PC_data = new PC_Data();




//header("location:one.html");
//$PC_data->selectAll();
$connection->disconnect();


?>
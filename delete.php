<?php
require_once("Classes/PC_Data.php");

$id = $_POST['id'];

$pcdata = new PC_Data();
$pcdata->deleteById($id);
header("location:adminpage.php");


?>
<?php
require_once("Classes/PC_Data.php");

$pcname = $_POST['pcname'];
$pcprice = $_POST['pcprice'];
$pcdesc = $_POST['pcdesc'];

$pcdata = new PC_Data();
$pcdata->insert($pcname, $pcprice, $pcdesc);
header("location:adminpage.php");

?>
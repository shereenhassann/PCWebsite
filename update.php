<?php
require_once("Classes/PC_Data.php");

$pcname = $_POST['pcname_update'];
$pcprice = $_POST['pcprice_update'];
$pcdesc = $_POST['pcdesc_update'];

$pcdata = new PC_Data();
$pcdata->update($pcname, $pcprice, $pcdesc);
header("location:adminpage.php");

?>
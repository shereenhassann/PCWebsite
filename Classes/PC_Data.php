<html>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/Style.css" rel="stylesheet">
</html>
<?php

require_once("Connection.php");

class PC_Data extends Connection
{
    function selectAllUser()
    {
        $arr = ["cables.jpg", "chromebook.jpg", "dev.jpg", "dev1.jpg", "icloud.jpg", "itunes.jpg", "l.png", "lide5.jpg", "macbook.jpg", "pcc.jpg","pccc.jpg", "slid1.jpg","slide2.jpg", "slide3.jpg","slide4.jpg","slide6.jpg", "tablet.jpg","tb.png","win10.jpg"];

        $j=0;
        parent::connect();
        $sql = "select * from PC";
        $query = mysqli_query(parent::returnConn(), $sql);
        $rowsNum = mysqli_num_rows($query);
        echo'<div class="container"><div class="row">';
        for($i=0; $i<$rowsNum; $i++) {
            if($j==sizeof($arr))
                $j=0;
            echo'<div class="col-xs-12 col-sm-6 col-md-3">'.
                '<div class="thumbnail " style="height: 400px;">'.'<img src="images/'.$arr[$j++].'" alt="">'.'<div class="caption">';
            $row = mysqli_fetch_assoc($query);
            echo '<h3 class="text-center" >'.$row["pc_name"].'</h3>';
            echo '<h4 class="text-center">Price: '.$row["pc_price"].'$</h4>';
            echo '<p class="text-justify">'.$row["pc_description"].'</h4>';
            echo"</div></div></div>";
        }
        echo"</div></div>";
//                <img src="images/chromebook.jpg" alt="...">
//                <div class="caption">
//                    <h3 class="text-center">ChromeBook</h3>
//                    <p class="text-justify">A Chromebook is a laptop of a different breed. Instead of Windows 10 or macOS, Chromebooks run Google's Chrome OS. These machines are designed to be used primarily while connected to the Internet, with most applications and documents living in the cloud.</p>
//                    <p><a href="#" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#login_modal">Add to cart</a></p>
//                </div>
        parent::disconnect();
    }


    function insert($pcname, $pcprice, $pcdesc)
    {
        parent::connect();

        $query = "insert into pc (pc_name, pc_price, pc_description) values ('$pcname', '$pcprice', '$pcdesc')";
        if (mysqli_query(parent::returnConn(), $query)) {
        echo "New record created successfully\n";
        } else {
        echo "Error: " . $query . "" . mysqli_error(parent::returnConn());
        }
        parent::disconnect();

    }

    function selectAllAdmin()
    {
        $arr = ["cables.jpg", "chromebook.jpg", "dev.jpg", "dev1.jpg", "icloud.jpg", "itunes.jpg", "l.png", "lide5.jpg", "macbook.jpg", "pcc.jpg","pccc.jpg", "slid1.jpg","slide2.jpg", "slide3.jpg","slide4.jpg","slide6.jpg", "tablet.jpg","tb.png","win10.jpg"];

        $j=0;
        parent::connect();
        $sql = "select * from PC";
        $query = mysqli_query(parent::returnConn(), $sql);
        $rowsNum = mysqli_num_rows($query);
        echo'<div class="container"><div class="row" >';
        for($i=0; $i<$rowsNum; $i++) {
            if($j==sizeof($arr))
                $j=0;
            echo'<div class="col-xs-12 col-sm-6 col-md-3"><div class="thumbnail prodThumbnail">'.'<img src="images/'.$arr[$j++].'" alt="">'.'<div class="caption">';
            $row = mysqli_fetch_assoc($query);
            echo '<h3 class="text-center" >'.$row["pc_name"].'</h3>';
            echo '<h4 class="text-center">Price: '.$row["pc_price"].'$</h4>';
            echo '<p class="text-justify">'.$row["pc_description"].'</h4>';
            echo '<p class="text-justify">ID:'.$row["pc_id"].'</h4>';

            echo"</div></div></div>";
        }
        echo"</div></div>";
//                <img src="images/chromebook.jpg" alt="...">
//                <div class="caption">
//                    <h3 class="text-center">ChromeBook</h3>
//                    <p class="text-justify">A Chromebook is a laptop of a different breed. Instead of Windows 10 or macOS, Chromebooks run Google's Chrome OS. These machines are designed to be used primarily while connected to the Internet, with most applications and documents living in the cloud.</p>
//                    <p><a href="#" class="btn btn-primary btn-block" role="button" data-toggle="modal" data-target="#login_modal">Add to cart</a></p>
//                </div>
        parent::disconnect();
    }

    public function deleteById($id)
    {
        parent::connect();

        $sql = "delete from pc where pc_id = '$id'";
        $result = $query = mysqli_query(parent::returnConn(), $sql);
        if($result == true)
            echo"<script>alert('Deleted Successfully')</script>";
        else
            echo"<script>alert('Can\'t delete)</script>";

        parent::disconnect();

    }

    public function update($pcname, $pcprice, $pcdesc)
    {
        parent::connect();
//UPDATE `table_name` SET `column_name` = `new_value' [WHERE condition];
        $sql = "update pc set pc_price = '$pcprice', pc_description = '$pcdesc' where pc_name = '$pcname'";
        $result = $query = mysqli_query(parent::returnConn(), $sql);
        if($result == true)
            echo"<script>alert('Deleted Successfully')</script>";
        else
            echo"<script>alert('Can\'t delete)</script>";

        parent::disconnect();
    }


}
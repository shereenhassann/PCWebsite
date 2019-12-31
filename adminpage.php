<?php
session_start();

require_once ("Classes/PC_Data.php");

if(isset($_SESSION['id'])) {
    ?>

<html lang="en">
<head>
    <title>PC</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/Style.css" rel="stylesheet">
</head>
    <body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="images/pc.png" alt=""
                                                          style="width: 40px; height: 31px"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"><span
                                        class="glyphicon glyphicon-home myicon"></span><span
                                        class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Best Sellers <span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">

                                <li><a href="#">Dell XPS15</a></li>
                                <li><a href="#">MacBook Pro15</a></li>
                                <li><a href="#">MacBook Pro13</a></li>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Branches <span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Cairo</a></li>
                                <li><a href="#">Alexandria</a></li>
                                <li><a href="#">Minya</a></li>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">UK</a></li>
                                <li><a href="#">Dubai</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping
                                Cart</a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="row" style="margin: 20px">

        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnail adminThumbnail">
                <form action="insert.php" id="insertForm" method="post">
                    <div class="form-group">
                        <label for="pcname" class="control-label">PC name</label>
                        <input type="text" id="pcname" name="pcname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pcprice" class="control-label">PC Price</label>
                        <input type="number" id="pcprice" name="pcprice" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pcdesc" class="control-label">PC Description</label>
                        <textarea id="pcdesc" name="pcdesc" class="form-control"></textarea>
                    </div>
                    <button href="#" id="insert" class="btn btn-block btn-primary" style="margin-top: 90px" type="submit">Insert</button>
                </form>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnail adminThumbnail" >
                <form action="delete.php" method="post">
                <div class="form-group">
                    <label for="id" class="control-label">PC ID:</label>
                    <input type="number" id="id" name="id" class="form-control">
                </div>
                <button href="#" id="delete" class="btn btn-block btn-primary" style="margin-top: 257px" type="submit">Delete</button>
                </form>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnail adminThumbnail">
                <form action="update.php" id="updateForm" method="post">

                    <div class="form-group">
                        <label for="pcname_update" class="control-label">Existing PC name</label>
                        <input type="text" id="pcname_update" name="pcname_update" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pcprice_update" class="control-label">PC Price</label>
                        <input type="number" id="pcprice_update" name="pcprice_update" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pcdesc_update" class="control-label">PC Description</label>
                        <textarea id="pcdesc_update" name="pcdesc_update" class="form-control"></textarea>
                    </div>
                    <button href="#" id="update" class="btn btn-block btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>

    </div>


</div>

    </body>
    </html>
    <?php
    $pcData = new PC_Data();
    $arr = $pcData->selectAllAdmin();
}else {
    header("location:one.html");
}

?>
<?php

session_start();

require_once ("Classes/Connection.php");
//    if(!isset($_POST['loginForm'])) {
//    header("location:one.html");
//    }
//    else {
        $pass = $_POST['password_login'];
        $email = $_POST['email_login'];
        $rowNum = 0;
        $connection = new Connection();
        $connection->connect();

        $sql = "Select * from user where upass = '$pass' and uemail = '$email'";
        $query = mysqli_query($connection->returnConn(), $sql);
        if ($query != null) {
            $rowNum = mysqli_num_rows($query);
            $row = mysqli_fetch_assoc($query);
            $user_id = $row["uid"];
        }

        //  echo"rowNum = ".$rowNum;
        if ($rowNum >= 1) //logged in has account
        {
            $_SESSION['id'] = $user_id;
            if ($row["utype"] == "user") {
                ?>
                <html lang="en">
                <head>
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
                    <title>PC</title>

                    <!-- Bootstrap -->
                    <link href="css/bootstrap.min.css" rel="stylesheet">
                    <link href="css/Style.css" rel="stylesheet">

                    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                    <!--[if lt IE 9]>
                    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                    <![endif]-->


                </head>
                <body>
                <div class="container">
                    <header>
                        <div class="row">
                            <div class="logo col-md-3 col-md-offset-1" style="padding-top: 30px">
                            </div>
                        </div>
                    </header>
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
                                    <li><a> <?php echo 'Hello,' . $row["uname"] ?></a></li>
                                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>
                                            Logout</a>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>


                    <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel"
                         onpause="true">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/slid1.jpg" alt="...">
                                <div class="carousel-caption">
                                    <h4>Tablets</h4>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/slide2.jpg" alt="...">
                                <div class="carousel-caption">
                                    <h4>Dell</h4>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/slide3.jpg" alt="...">
                                <div class="carousel-caption">
                                    <h4>Accessories</h4>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/slide4.jpg" alt="...">
                                <div class="carousel-caption">
                                    <h4>Network devices</h4>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/lide5.jpg" alt="...">
                                <div class="carousel-caption">
                                    <h4>Complex Devices</h4>
                                </div>
                            </div>

                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button"
                           data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button"
                           data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="images/chromebook.jpg" alt="...">
                                <div class="caption">
                                    <h3 class="text-center">ChromeBook</h3>
                                    <p class="text-justify">A Chromebook is a laptop of a different breed. Instead of
                                        Windows 10
                                        or macOS, Chromebooks run Google's Chrome OS. These machines are designed to be
                                        used
                                        primarily while connected to the Internet, with most applications and documents
                                        living
                                        in the cloud.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="images/cables.jpg" alt="...">
                                <div class="caption">
                                    <h3 class="text-center ">Cables</h3>
                                    <p class="text-justify">A cable is a thick wire, or a group of wires inside a rubber
                                        or
                                        plastic covering, which is used to carry electricity or electronic signals.
                                        Cable is
                                        used to refer to television systems in which the signals are sent along
                                        underground
                                        wires rather than by radio waves.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="images/win10.jpg" alt="...">
                                <div class="caption">
                                    <h3 class="text-center">Dell Pc</h3>
                                    <p class="text-justify">Dell is a US multinational computer technology company that
                                        develops, sells, repairs, and supports computers and related products and
                                        services.
                                        Dell
                                        is the largest shipper of PC monitors worldwide.Dell is a US multinational
                                        computer
                                        technology company that develops and sells.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <img src="images/tablet.jpg" alt="...">
                                <div class="caption">
                                    <h3 class="text-center">Tablet</h3>
                                    <p class="text-justify">A tablet, or tablet PC, is a portable computer that uses a
                                        touchscreen as its primary input device. Most tablets are slightly smaller and
                                        weigh
                                        less than the average laptop. ... Tablets without physical keyboards allow you
                                        to
                                        enter
                                        text using a pop-up keyboard that appears on the screen.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <p><a href="allPcs.php" class="btn btn-primary btn-block" role="button">Show More</a></p>
                        </div>
                    </div>


                </div>

                <!-- Footer -->
                <footer class="page-footer font-small my-footer">

                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3">

                        <span class="text">© 2019 Copyright:</span>
                        <a class="text" href="https://www.google.com"> PC Store</a>
                    </div>
                    <!-- Copyright -->

                </footer>
                <!-- Footer -->

                </div>


                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="js/jquery-3.3.1.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>
                <script>
                    /* $('.carousel').carousel({
                         interval: 2000
                     });
                     $('.pause').carousel({
                     });*/
                    $('#b_login').click(function (x) {
                        var un = $('#username').val();
                        var pw = $('#password_login').val();
                        if (un == '') {
                            x.preventDefault();
                            $('#username').parent().addClass('has-error');
                        }
                        else {
                            $('#username').parent().removeClass('has-error');
                        }
                        if (pw == '') {
                            x.preventDefault();
                            $('#password_login').parent().addClass('has-error');
                        }
                        else {
                            $('#password_login').parent().removeClass('has-error');
                        }
                    });
                    $('#b_register').click(function (e) {
                        var name = $('#name').val();
                        var age = $('#age').val();
                        var email = $('#email').val();
                        var password = $('#password').val();
                        var address = $('#address').val();
                        if (name == '') {
                            e.preventDefault();
                            $('#name').parent().addClass('has-error');
                        }
                        else {
                            $('#name').parent().removeClass('has-error');
                        }
                        if (age == '') {
                            e.preventDefault();
                            $('#age').parent().addClass('has-error');
                        }
                        else {
                            $('#age').parent().removeClass('has-error');
                        }
                        if (email == '') {
                            e.preventDefault();
                            $('#email').parent().addClass('has-error');
                        }
                        else {
                            $('#email').parent().removeClass('has-error');
                        }
                        if (password == '') {
                            e.preventDefault();
                            $('#password').parent().addClass('has-error');
                        }
                        else {
                            $('#password').parent().removeClass('has-error');
                        }
                        if (address == '') {
                            e.preventDefault();
                            $('#address').parent().addClass('has-error');
                        }
                        else {
                            $('#address').parent().removeClass('has-error');
                        }
                    });
                </script>
                </body>
                </html>

                <?php
            } else {

                header("location:adminpage.php");
            }
        } else {
            echo "<script>alert('Oops, Invalid email or password! \\nTry Again');</script>"
                . "<script>window.location.href = 'one.html';</script>";

        }
    if(!isset($_POST['loginForm']))
       header("locaton:one.html");
        $connection->disconnect();

?>



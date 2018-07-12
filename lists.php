<!DOCTYPE html>
<html lang="en">

<head>
<?php

$servername = "localhost";
$username = "root";
$password = "password";
$database = "zoetrope";

$con = mysqli_connect($servername,$username,$password,$database);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//session_start();
$result_eng =  mysqli_query($con,"select * from movies where language = 'English' order by rating desc limit 10;");
$result_hin =  mysqli_query($con,"select * from movies where language = 'Hindi' order by rating desc limit 10;");
$result_tel =  mysqli_query($con,"select * from movies where language = 'Telugu' order by rating desc limit 10;");
$result_tam =  mysqli_query($con,"select * from movies where language = 'Tamil' order by rating desc limit 10;");
$result_mal =  mysqli_query($con,"select * from movies where language = 'Malayalam' order by rating desc limit 10;");
?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zoetrope | Lists</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./index.php">Zoetrope</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="./movies.php">Movies</a>
                    </li>
                    <li>
                        <a href="./tvshows.php">TV Shows</a>
                    </li>
                    <li>
                        <a href="./lists.php">Lists</a>  
                    </li>
                </ul>
               <?php
                session_start();
                
                
                if (isset($_SESSION['username'])){
                echo "<ul class=\"nav navbar-nav navbar-right\">
                     <li>
                        <a href=\"./logout.php\">Logout</a>
                    </li>
                 </ul>" ;
                }
                else {
                    echo "<ul class=\"nav navbar-nav navbar-right\">
                     <li>
                        <a href=\"./signin.php\">Sign In</a>
                    </li>
                    <li>
                        <a href=\"./signup.php\">Sign Up</a>
                    </li>
                 </ul>" ;
                }
                ?>   
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



    <!-- Page Content -->
    <div class="container">
        
        <div class="row">
            <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a data-toggle="pill" href="#list1">English</a></li>
                    <li><a data-toggle="pill" href="#list2">Hindi</a></li> 
                    <li><a data-toggle="pill" href="#list3">Tamil</a></li>
                    <li><a data-toggle="pill" href="#list4">Telugu</a></li>
                    <li><a data-toggle="pill" href="#list5">Malayalam</a></li>
                </ul>
            </div>
    
            <div class="tab-content">
                <div id="list1" class="tab-pane fade in active">
                    <div class = "col-md-10">
                        <ul class="list-group">
                            <h3> Top 10 English Movies </h3>
                            <table class="table">
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result_eng))
                                    {
                                    $link = $row['posterlink'];
                                    $name = $row['name'];
                                    echo "<tr>
                                        <td><img src=\"$link\" width=\"50\" height=\"70\"> </td>
                                    <td><h4> $name</h4></td>
                                    </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </ul>
                    </div>
                </div>
                
               <div id="list2" class="tab-pane fade in active">
                    <div class = "col-md-10">
                        <ul class="list-group">
                            <h3> Top 10 Hindi Movies </h3>
                            <table class="table">
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result_hin))
                                    {
                                    $link = $row['posterlink'];
                                    $name = $row['name'];
                                    echo "<tr>
                                        <td><img src=\"$link\" width=\"50\" height=\"70\"> </td>
                                    <td><h4> $name</h4></td>
                                    </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </ul>
                    </div>
                </div>
                
                <div id="list3" class="tab-pane fade in active">
                    <div class = "col-md-10">
                        <ul class="list-group">
                            <h3> Top 10 Tamil Movies </h3>
                            <table class="table">
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result_tam))
                                    {
                                    $link = $row['posterlink'];
                                    $name = $row['name'];
                                    echo "<tr>
                                        <td><img src=\"$link\" width=\"50\" height=\"70\"> </td>
                                    <td><h4> $name</h4></td>
                                    </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </ul>
                    </div>
                </div>
                
                <div id="list4" class="tab-pane fade in active">
                    <div class = "col-md-10">
                        <ul class="list-group">
                            <h3> Top 10 English Telugu </h3>
                            <table class="table">
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result_tel))
                                    {
                                    $link = $row['posterlink'];
                                    $name = $row['name'];
                                    echo "<tr>
                                        <td><img src=\"$link\" width=\"50\" height=\"70\"> </td>
                                    <td><h4> $name</h4></td>
                                    </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </ul>
                    </div>
                </div>
                
                <div id="list5" class="tab-pane fade in active">
                    <div class = "col-md-10">
                        <ul class="list-group">
                            <h3> Top 10 Malayalam Movies </h3>
                            <table class="table">
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result_mal))
                                    {
                                    $link = $row['posterlink'];
                                    $name = $row['name'];
                                    echo "<tr>
                                        <td><img src=\"$link\" width=\"50\" height=\"70\"> </td>
                                    <td><h4> $name</h4></td>
                                    </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </ul>
                    </div>
                </div>
                
            </div>  
        </div>
    </div>

             <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

   

</body>

</html>
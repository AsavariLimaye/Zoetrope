<!DOCTYPE html>
<html lang="en">

<head>

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

    <div class="container">
    <div class="row">    

        <div class="col-md-8 col-xs-offset-3">
            <div class="input-group">
                <div  class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">All</a></li>
                      <li><a href="#its_equal">Movies</a></li>
                      <li><a href="#greather_than">TV Shows</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Find Movies,Shows & More ...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
    </div>
</div>


    <!-- Page Content -->
    <div class="container">
        
        <div class="row">
            <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a data-toggle="pill" href="#list1">Hollywood</a></li>
                    <li><a data-toggle="pill" href="#list2">Bollywood</a></li> 
                    <li><a data-toggle="pill" href="#list3">Comedy</a></li>
                    <li><a data-toggle="pill" href="#list4">Romance</a></li>
                </ul>
            </div>
    
            <div class="tab-content">
                <div id="list1" class="tab-pane fade in active">
                    <div class = "col-md-10">
                        <ul class="list-group">
                            <h3> Top 10 Hollywood Movies </h3>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><img src="./op_1.jpg" width="50" height="70"> </td>
                                    <td><h4>Cloudy with a Chance of Meatballs</h4></td>
                                    </tr>
                                    <tr>
                                        <td><img src="./op_2.jpg" width="50" height="70"> </td>
                                        <td><h4>Mean Girls</h4></td>
                                    </tr>
                                    <tr>
                                        <td><img src="./op_3.jpg" width="50" height="70"> </td>
                                        <td><h4>Harry Potter and the Chamber of Secrets</h4></td>
                                    </tr>
                                </tbody>
                            </table>
                        </ul>
                    </div>
                </div>
                
                <div id="list2" class="tab-pane fade">
                    <div class = "col-md-10">
                        <ul class="list-group">
                            <h3> Top 10 Bollywood Movies </h3>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><img src="./op_4.jpg" width="50" height="70"> </td>
                                    <td><h4>Cloudy with a Chance of Meatballs</h4></td>
                                    </tr>
                                    <tr>
                                        <td><img src="./op_2.jpg" width="50" height="70"> </td>
                                        <td><h4>Andaa Apna Apna</h4></td>
                                    </tr>
                                    <tr>
                                        <td><img src="./op_5.jpg" width="50" height="70"> </td>
                                        <td><h4>Harry Potter and the Chamber of Secrets</h4></td>
                                    </tr>
                                </tbody>
                            </table>
                        </ul>
                    </div>
                </div>
                <div id="list3" class="tab-pane fade">
                    <div class = "col-md-10">
                        <ul class="list-group">
                            <h3> Top 10 Comedy Movies </h3>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><img src="./op_7.jpg" width="50" height="70"> </td>
                                    <td><h4>Cloudy with a Chance of Meatballs</h4></td>
                                    </tr>
                                    <tr>
                                        <td><img src="./op_6.jpg" width="50" height="70"> </td>
                                        <td><h4>Mean Girls</h4></td>
                                    </tr>
                                    <tr>
                                        <td><img src="./op_3.jpg" width="50" height="70"> </td>
                                        <td><h4>Stuart Little</h4></td>
                                    </tr>
                                </tbody>
                            </table>
                        </ul>
                    </div>    
                </div>
                <div id="list4" class="tab-pane fade">
                    <div class = "col-md-10">
                        <ul class="list-group">
                            <h3> Top 10 Romance Movies </h3>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><img src="./op_1.jpg" width="50" height="70"> </td>
                                    <td><h4>Stuart Little</h4></td>
                                    </tr>
                                    <tr>
                                        <td><img src="./op_8.jpg" width="50" height="70"> </td>
                                        <td><h4>Mean Girls</h4></td>
                                    </tr>
                                    <tr>
                                        <td><img src="./op_9.jpg" width="50" height="70"> </td>
                                        <td><h4>Andaa Apna Apna</h4></td>
                                    </tr>
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
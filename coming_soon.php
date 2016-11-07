<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zoetrope | Movies</title>
    
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

    <style >

    iframe.fixed {
    position: fixed;
    top: 80px;
    right: 0;
    width: 100px;
    height: 100px;
    border: 3px solid #73AD21;
    }

    .row
    {
        
  margin-bottom: 25px;
    }

    
    </style>

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
            <div class="col-md-12">
                <p  style="margin-top:8px;margin-left:200px;margin-bottom:0px" class="lead">Coming to Theatres Soon ... </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
         
            <div class="col-md-2">
                
                <div style="margin-top:-5px;margin-left:-50px" class="list-group">
                    <a href="./opening.php" class="list-group-item">Opening This Week</a>
                    <a href="./now_playing.php" class="list-group-item">Now Playing</a>
                    <a href="#" class="list-group-item">Coming Soon</a>
                </div>
            </div>
             

             <div class="col-md-2">
                <iframe style="margin-left:-5px" width="300" height="180" src="https://www.youtube.com/embed/gwzMKpit6Jo" frameborder="0" allowfullscreen></iframe>
             <h6 style="margin-left:1px" <small>January</small>14</h6>
              </div>

            <div class="col-md-2">
             <iframe style="margin-left:150px" width="300" height="180" src="https://www.youtube.com/embed/LKFuXETZUsI" frameborder="0" allowfullscreen></iframe>
             <h5 style="margin-left:150px"><small>December</small> 21</h5>
            </div>
 
             <div class="col-md-2">
                 <iframe style="margin-top:-5px;margin-left:300px" width="300" height="180" src="https://www.youtube.com/embed/r4O4Xec60_k" frameborder="0" allowfullscreen></iframe>
                 <h5 style="margin-left:300px"><small>November</small> 14</h5>
            </div>


        </div>
     </div>

     <div class="container">
        <div class="row">
             

             <div class="col-md-2">
             <iframe style="margin-top:-5px;margin-left:194px" width="300" height="180" src="https://www.youtube.com/embed/y1fZg0hhBX8" frameborder="0" allowfullscreen> </iframe>
             <h5 style="margin-left:194px"><small>February 1</small> 14</h5>
            </div>

            <div class="col-md-2">
             <iframe style="margin-top:-5px;margin-left:348px" width="300" height="180" src="https://www.youtube.com/embed/gJhQKXNsPnQ" frameborder="0" allowfullscreen></iframe>
             <h5 style="margin-left:348px"><small>December</small> 10</h5>
            </div>
 
             <div class="col-md-2">
                 <iframe style="margin-top:-5px;margin-left:497px" width="300" height="180" src="https://www.youtube.com/embed/r8kE7rSzfQs" frameborder="0" allowfullscreen></iframe>
                 <h5 style="margin-left:497px"><small>November</small> 25</h5>
            </div>


        </div>
     </div>
      

   
             <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

   

</body>

</html>
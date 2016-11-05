<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zoetrope</title>
    
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
<style>

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
                        <a href="./tvshow.php">TV Shows</a>
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
            <div style="margin-bottom:25px" class="input-group">
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
                
                <div style="margin-top:20px;margin-left:-50px" class="list-group">
                    <a href="./opening.php" class="list-group-item">Opening This Week</a>
                    <a href="./now_playing.php" class="list-group-item">Now Playing</a>
                    <a href="./coming_soon.php" class="list-group-item">Coming Soon</a>
                </div>
            </div>

 <h4 style="margin-bottom:20px">Movies Opening This Week</h4>
 

<div class="container-fluid">
<div class = "row">
   
  
   <div class = "col-md-2 " >
      <a href = "#" class = "thumbnail">
         <img style="max-height:210px; "src = "./op_1.jpg" alt = "Generic placeholder thumbnail">
      </a>
      <p style="max-width:200px">ALL THE FEELS (U/A) <br/>  English</br> Estimated Rating : 4/5 <p>
      
   </div>
   
   <div class = "col-md-2">
      <a href = "#" class = "thumbnail">
         <img style="max-height:210px;" src = "./op_2.jpg" alt = "Generic placeholder thumbnail">
      </a>
      <p style="max-width:200px">BFG (U/A)</br>English</br>Estimated Rating : 3/5 </p>
   </div>

   <div class = "col-md-2">
      <a href = "#" class = "thumbnail">
         <img style="max-height:210px;" src = "./op_5.jpg" alt = "Generic placeholder thumbnail">
      </a>
      <p style="max-width:200px">Manam (U/A)</br>Telgu</br>Estimated Rating : 2/5 </p>
    </div>  

   <div class = "col-md-2">
      <a href = "#" class = "thumbnail">
         <img style="max-height:210px;" src = "./op_3.jpg" alt = "Generic placeholder thumbnail">
      </a>
      <p style="max-width:200px">Raees (A)</br>Hindi</br>Estimated Rating : 2.5/5</br>
   </div>
   
   <div class = "col-md-2">
      <a href = "#" class = "thumbnail">
         <img style="max-height:210px;" src = "./op_4.jpg" alt = "Generic placeholder thumbnail">
      </a>
      <p style="max-width:200px">Talaiva (U/A)</br>Tamil</br>Estimated Rating : 4/5</p>
   </div>
   
</div>
</div>

<h4 class="col-md-offset-2" style="margin-top:35px;margin-bottom:20px">New TV Episodes This Week</h4>

<div class="container-fluid">
<div class = "row">
   
  
   <div class = "col-md-2 col-md-offset-2" >
      <a href = "#" class = "thumbnail">
         <img style="max-height:210px; "src = "./op_6.jpg" alt = "Generic placeholder thumbnail">
      </a>
      <p style="max-width:200px">Sherlock</br>Season 4</br>Episode 3</p>
   </div>

   <div class = "col-md-2">
      <a href = "#" class = "thumbnail">
         <img style="max-height:210px;" src = "./op_7.jpg" alt = "Generic placeholder thumbnail">
      </a>
      <p style="max-width:200px">Bones</br>Season 10</br>Episode 2</p>
   </div>

   <div class = "col-md-2">
      <a href = "#" class = "thumbnail">
         <img style="max-height:210px;" src = "./op_8.jpg" alt = "Generic placeholder thumbnail">
      </a>
      <p style="max-width:200px">Suits</br>Season 4</br>Episode 5</p>
    </div>  

   <div class = "col-md-2">
      <a href = "#" class = "thumbnail">
         <img style="max-height:210px;" src = "./op_9.jpg" alt = "Generic placeholder thumbnail">
      </a>
      <p style="max-width:200px">Castle</br>Season 7</br>Episode 7</p>
   </div>
   
   <div class = "col-md-2">
      <a href = "#" class = "thumbnail">
         <img style="max-height:210px;" src = "./op_10.jpg" alt = "Generic placeholder thumbnail">
      </a>
      <p style="max-width:200px">Narcos</br>Season 2</br>Episode 9</p>
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
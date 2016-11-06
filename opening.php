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
<?php
$link = mysqli_connect("localhost","root","Asavari2");
    if (!$link)
        {
        $output = 'Unable to connect to the data base server.';
         echo $output;
        exit();
        }
    if (!mysqli_select_db($link, 'zoetrope')) 
        {
        $output = 'Unable to locate the zoetrope database.'; 
         echo $output; 
         exit();
        }
         $query = 'select * from movies where rdate between  curdate() and date_add(curdate(),interval 7 day) limit 6;';
         //echo $query;
         $result = mysqli_query($link,$query);
         if (!$result)
            {
            echo "Could not connect to movies";
            exit();
            }
        $query1 = 'select * from tvshows where startdate between curdate() and date_add(curdate(),interval 7 day) limit 6;';
        //echo $query;
        $result1 = mysqli_query($link,$query1);
        if (!$result1)
            {
            echo "Could not connect to tvshows";
            exit();
            }
    
    ?>

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
   
<?php  
while ($row = mysqli_fetch_array($result))
{
 $name = $row['name'];
 $language = $row['language'];
 $rating = $row['rating'];
  $posterlink = $row['posterlink'];
  echo "<div class = \"col-md-12\" >
      <a href = \"#\" class = \"thumbnail\">
         <img style=\"margin-left:10px;margin-right:5px; \"src = \"$posterlink\" alt = \"Generic placeholder thumbnail\">
      </a>
      <p style=\"max-width:10px\">$name<br/>$language</br> Estimated Rating : $rating/10 <p>
      
   </div>";
}
 ?>
   
</div>
</div>

<h4 class="col-md-offset-2" style="margin-top:35px;margin-bottom:20px">New TV Episodes This Week</h4>

<div class="container-fluid">
<div class = "row">
   
 <?php  
while ($row = mysqli_fetch_array($result1))
{
 $name = $row['name'];
 $genre = $row['genre'];
 $seasons = $row['seasons'];
 $posterlink = $row['posterlink'];
 echo " <div class = \"col-md-2 col-md-offset-2\" >
      <a href = \"#\" class = \"thumbnail\">
         <img style=\"max-height:210px; \"src = \"$posterlink\" alt = \"Generic placeholder thumbnail\">
      </a>
      <p style=\"max-width:200px\">$name</br>Seasons:$seasons</br>$genre</p>
   </div> ";
}
 ?> 
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
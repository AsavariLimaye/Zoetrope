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
.row{
  margin-top: 0px;
  margin-bottom: 30px;
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
    </nav>

   
  
  </div class="container">
  <div class="row">
  </div>
</div>

    <!-- Page Content -->

<?php
if (!isset($_SESSION['username']))
{
echo"
    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col-md-3\">
                <p class=\"lead\">Something new to watch </p>
                <div class=\"list-group\">
                    <a href=\"./opening.php\" class=\"list-group-item\">Opening This Week</a>
                    <a href=\"./now_playing.php\" class=\"list-group-item\">Now Playing</a>
                    <a href=\"./coming_soon.php\" class=\"list-group-item\">Coming Soon</a>
                </div>
            </div>
        
            <div class=\"col-md-9\">
                <div class=\"row\">";
                
                    
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
                    $languages = mysqli_query($link,'select language from movies group by language having count(*)>5;');
                    if (!$languages)
                        {
                            echo "Could not connect to movies to obtain languages";
                            exit();
                        }
                    while ($row = mysqli_fetch_array($languages))
                    {
                    $curlanguage = $row['language'];
                    echo "<h2>$curlanguage</h2>
                            <div class=\"row\">";
                    $languagemoviesquery = "select * from movies where language='$curlanguage' order by rating desc limit 3;";
                    //echo $languagemoviesquery;
                    $languagemovies = mysqli_query($link,$languagemoviesquery);
                    while ($langrow = mysqli_fetch_array($languagemovies))
                    {
                    $title = $langrow['name'];  
                    $description = $langrow['summary'];
                    $image = $langrow['posterlink'];
                    $rating = $langrow['rating'];
                    echo "<div class=\"col-sm-4 col-lg-4 col-md-4\">
                        <div class=\"thumbnail\">
                            <img style=\"max-height:300px;max-width:250px;min-height:300px;min-width:250px\" src=\"$image\" alt=\"\">
                            <div class=\"caption\">
                                <h4><a href=\"./movie.php?title=$title \">$title</a>
                                </h4>
                                <div class=\"ratings\">
                                <p class=\"pull-left\">Rating : $rating/10.0</p>
                                </br>
                                </div> 
                                <p class=\"pull-left\">$description</p>
                                
                            </div>
                            
                            
                        </div>
                    </div>";
                    }
                    echo "</div>";
                    }
                    
                    
                echo "    
                </div>
            </div>
   

    </div>
    </div>";
}

//if the user is not logged in
else
{
    echo "<div class=\"container\">

        <div class=\"row\">

            <div class=\"col-md-3\">
                <p class=\"lead\">Something new to watch </p>
                <div class=\"list-group\">
                    <a href=\"./opening.php\" class=\"list-group-item\">Opening This Week</a>
                    <a href=\"./now_playing.php\" class=\"list-group-item\">Now Playing</a>
                    <a href=\"./coming_soon.php\" class=\"list-group-item\">Coming Soon</a>
                </div>
            </div>
        
            <div class=\"col-md-9\">
                <div class=\"row\">";
                
                    
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
                    $uid = $_SESSION['uid'];
                    //print $uid;
                    
                    $reco_query2 = "select * from movies,mcast where movies.mid=mcast.mid and mcast.pid=(select pid from favactor where uid=$uid order by points desc limit 1);";
                    $reco_query1 = "select * from movies mo where genre = (select genre from movies as m1,movierating as m2 where m2.uid=$uid and m1.mid=m2.mid and m2.rating = (select max(d.rating) from  movierating as d where d.uid=$uid)) order by mo.rating desc limit 5;  ";
                    
                    echo $reco_query1;
                    echo $reco_query2;
                    
                    $result2 =  mysqli_query($link,$reco_query2);
                    $result1 =  mysqli_query($link,$reco_query1);
                    if (!$result1)
                        {
                            echo "Error result 1";
                            exit();
                        }
                    if (!$result2)
                        {
                            echo "Error result2";
                            exit();
                        }
                        
                    echo "<div class=\"row\">
                        <h2> Based on favorite Genre </h2>";  
                    while ($row = mysqli_fetch_array($result1))
                    {
                    $title = $row['name'];  
                    $description = $row['summary'];
                    $image = $row['posterlink'];
                    $rating = $row['rating'];
                    echo "<div class=\"col-sm-4 col-lg-4 col-md-4\">
                        <div class=\"thumbnail\">
                            <img style=\"max-height:300px;max-width:250px;min-height:300px;min-width:250px\" src=\"$image\" alt=\"\">
                            <div class=\"caption\">
                                <h4><a href=\"./movie.php?title=$title \">$title</a>
                                </h4>
                                <div class=\"ratings\">
                                <p class=\"pull-left\">Rating : $rating/10.0</p>
                                </br>
                                </div> 
                                <p class=\"pull-left\">$description</p>
                                
                            </div>
                            
                            
                        </div>
                    </div>";
                    }
                    
                    echo "</div>
                        <div class=\"row\">
                        <h2> Based on favorite Actor </h2>"; 
                    while ($row = mysqli_fetch_array($result2))
                    {
                    $title = $row['name'];  
                    $description = $row['summary'];
                    $image = $row['posterlink'];
                    $rating = $row['rating'];
                    echo "<div class=\"col-sm-4 col-lg-4 col-md-4\">
                        <div class=\"thumbnail\">
                            <img style=\"max-height:300px;max-width:250px;min-height:300px;min-width:250px\" src=\"$image\" alt=\"\">
                            <div class=\"caption\">
                                <h4><a href=\"./movie.php?title=$title \">$title</a>
                                </h4>
                                <div class=\"ratings\">
                                <p class=\"pull-left\">Rating : $rating/10.0</p>
                                </br>
                                </div> 
                                <p class=\"pull-left\">$description</p>
                                
                            </div>
                            
                            
                        </div>
                    </div>";
                    }
                    echo "</div>";
                    echo "
                    
                    
                </div>
            </div>
        </div>
     </div>"; 
}
?>
    
    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-6">
                    <p>Copyright &copy; Asavari Chandana 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>

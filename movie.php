<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zoetrope | TV Show</title>
    
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
  margin-top: 8px;
  margin-bottom: 8px;
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
                <form method="POST" action="search.php">
                    <input type="hidden" name="search_param" value="all" id="search_param">         
                    <input type="text" class="form-control" name="x" placeholder="Find Movies,Shows & More ...">
                    <span class="input-group-btn">
                        <input name="searchbtn" class="btn btn-default" type="submit"/><span class="glyphicon glyphicon-search"></span>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class = "page-header" class="col-md-6">   
                <?php
                $title =  htmlspecialchars($_GET['title']);
                echo "<h1>
                    $title
                </h1>";
                ?>
            </div>
            <div class = "col-md-2">
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </p>
            </div>
            <div style="float:right" class = "col-md-3">
                <button type="button" style="float:right" class="btn btn-default btn-success">Rate this Movie</button>
            </div>
            <div style="float:right" class = "col-md-3">
                <button type="button" style="margin-left:280px"  class="btn btn-default btn-success">Add to WishList</button>
            </div>
        </div>
    </div>
    
    <?php
    $titleToSearch =  htmlspecialchars($_GET['title']);
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
                    $query = 'select * from movies where name like \''.$titleToSearch.'\';';
                    //echo $query;
                    $result = mysqli_query($link,$query);
                    if (!$result)
                        {
                            echo "Could not connect to movies";
                            exit();
                        }
    $row = mysqli_fetch_array($result);
    $mid = $row['mid'];
    $title = $row['name'];  
    $description = $row['summary'];
    $image = $row['posterlink'];
    $rating = $row['rating'];
    $rdate = $row['rdate'];
    $producer = $row['producer'];
    $director = $row['director'];
    $composer = $row['composer'];
    $language = $row['language'];
    $runtime = $row['runtime'];
    $genre = $row['genre'];
    
    $reviewquery = 'select review from mreview where mid = '.$mid.';';
    //echo $reviewquery;
    $reviewresult =  mysqli_query($link,$reviewquery);
    if (!$reviewresult)
                        {
                            echo "Could not connect to movies reviews";
                            exit();
                        }
     $castquery = 'select actors.name from actors,mcast where mcast.pid=actors.pid and mcast.mid='.$mid.';';
     //echo $castquery;
     $castresult = mysqli_query($link,$castquery);
     echo" <div class=\"container\">   <!--Container for the left side list and the poster-->
        <div class=\"row\">

            <div class=\"col-md-2\">
                <div style=\"margin-top:20px;margin-left:-50px\"  class=\"list-group\">
                    <a href=\"#\" class=\"list-group-item\">Opening This Week</a>
                    <a href=\"#\" class=\"list-group-item\">Now Playing</a>
                    <a href=\"#\" class=\"list-group-item\">Coming Soon</a>
                </div>
            </div>

            
            <div class=\"col-xs-3 col-md-3\"><img class=\"img-responsive\" style=\"max-height:400px; max-width:300px\" src=\"$image\"/></div>
            
            
            <div class=\"col-xs-12 col-md-7\">
                <p>
                $description
                </p>
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-12\" style=\"height:50px;\"> </div>
        </div>
        
        <div class=\"row\">
            
            
            <div class=\"col-mid-10\"> 
                <div>
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a data-toggle=\"tab\" href=\"#Reviews\">Reviews</a></li>
                        <li><a data-toggle=\"tab\" href=\"#Cast\">Cast</a></li>
                        <li><a data-toggle=\"tab\" href=\"#Details\">Details</a></li>
                    </ul>
                    
                    <div class=\"tab-content\">
                        <div id=\"Reviews\" class=\"tab-pane fade in active\">
                            <h3>Reviews</h3>";
                            
                            while ($rowrev = mysqli_fetch_array($reviewresult))
                            {
                                $review = $rowrev['review'];
                                echo "<div class=\"panel panel-default\">
                                <div class=\"panel-body\">
                                    $review
                                </div>
                                </div>";
                            }
                            
                            
                            echo "
                        </div>
                        
                        <div id=\"Cast\" class=\"tab-pane fade\">
                            <h3>Cast</h3>";
                            
                            while ($castrow =  mysqli_fetch_array($castresult))
                            {
                                $castname = $castrow['name'];
                            echo "<p> $castname </p>";
                            }
                        echo "</div>
                        
                        <div id=\"Details\" class=\"tab-pane fade\">
                            <h3>Details</h3>
                            <table class=\"table\">
                                <tbody> 
                                    <tr>
                                        <td>Release Date</td>
                                        <td>$rdate</td>
                                    </tr>
                                    <tr>
                                        <td>Running Time</td>
                                        <td>$runtime</td>
                                    </tr>
                                    <tr>
                                        <td>Composer</td>
                                        <td>$composer</td>
                                    </tr>
                                    <tr>
                                        <td>Director</td>
                                        <td>$director</td>
                                    </tr>
                                    <tr>
                                        <td>Producer</td>
                                        <td>$producer</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
            
    </div>   ";
    /*
    <div class="container">   <!--Container for the left side list and the poster-->
        <div class="row">

            <div class="col-md-2">
                <div style="margin-top:20px;margin-left:-50px"  class="list-group">
                    <a href="#" class="list-group-item">Opening This Week</a>
                    <a href="#" class="list-group-item">Now Playing</a>
                    <a href="#" class="list-group-item">Coming Soon</a>
                </div>
            </div>

            
            <div class="col-xs-3 col-md-3"><img class="img-responsive" style="max-height:400px; max-width:300px" src="op_10.jpg"/></div>
            
            
            <div class="col-xs-12 col-md-7">
                <p>
                    Rachel Green flees her wedding day and seeks out childhood friend Monica Geller, a New York City chef. They become roommates, and Rachel joins Monica's social circle of single people in their mid-20s: struggling actor Joey Tribbiani, business professional Chandler Bing, masseuse and musician Phoebe Buffay, and newly divorced paleontologist Ross Geller, Monica's older brother. To support herself, Rachel becomes a waitress at Central Perk, a Manhattan coffeehouse where the group often hangs out; when not there, the six are usually at Monica and Rachel's nearby West Village apartment, or Joey and Chandler's across the hall.</p>
                <p>
                    Episodes typically depict the friends' comedic and romantic adventures and career issues, such as Joey auditioning for roles or Rachel seeking jobs in the fashion industry. The six characters each have many dates and serious relationships, such as Monica with Richard Burke and Ross with Emily Waltham. Ross and Rachel's intermittent relationship is the most often-recurring storyline; during the ten seasons of the show they repeatedly date and break up, even while Ross briefly marries Emily, he and Rachel have a child, Chandler and Monica date and marry each other, and Phoebe marries Mike Hannigan. Other frequently recurring characters include Ross and Monica's parents in Long Island, Ross's ex-wife and their son, Central Perk barista Gunther, Chandler's ex-girlfriend Janice, and Phoebe's twin sister Ursula.</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-md-12" style="height:50px;"> </div>
        </div>
        
        <div class="row">
            
            
            <div class="col-mid-10"> 
                <div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#Reviews">Reviews</a></li>
                        <li><a data-toggle="tab" href="#Cast">Cast</a></li>
                        <li><a data-toggle="tab" href="#Details">Details</a></li>
                    </ul>
                    
                    <div class="tab-content">
                        <div id="Reviews" class="tab-pane fade in active">
                            <h3>Reviews</h3>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    A stunningly original concept that will not only delight and entertain the company's massive worldwide audience, but also promises to forever change the way people think about the way people think.
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    It’s not just a brilliant idea, but maybe the most conceptually daring movie the Bay Area animation house has ever produced. And that’s really saying something, what with WALL-E on the books.
                                </div>
                            </div>
                        </div>
                        
                        <div id="Cast" class="tab-pane fade">
                            <h3>Cast</h3>
                            <p> Amy Poehler, Joy </p>
                            <p> Mindy Kaling, Disgust </p>
                            <p> Phyllis Smith, Sadness </p>
                        </div>
                        
                        <div id="Details" class="tab-pane fade">
                            <h3>Details</h3>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Director</td>
                                        <td>Pete Docter</td>
                                    </tr>
                                    <tr>
                                        <td>Release Date</td>
                                        <td>May 18, 2015</td>
                                    </tr>
                                    <tr>
                                        <td>Running Time</td>
                                        <td>94 minutes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
            
    </div>   
    */
    ?>
    
            
             <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

   

</body>

</html>
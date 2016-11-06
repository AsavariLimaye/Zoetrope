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

    <!-- To use Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Corben" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Nobile" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>


    body {
   
    padding-top:20px

}
#custom_carousel .item {

    color:#000;
    background-color:#eee;
    padding:20px 0;
}
#custom_carousel .controls{
    overflow-x: auto;
    overflow-y: hidden;
    padding:0;
    margin:0;
    white-space: nowrap;
    text-align: center;
    position: relative;
    background:#ddd
}
#custom_carousel .controls li {
    display: table-cell;
    width: 1%;
    max-width:90px
}
#custom_carousel .controls li.active {
    background-color:#eee;
    border-top:3px solid orange;
}
#custom_carousel .controls a small {
    overflow:hidden;
    display:block;
    font-size:10px;
    margin-top:5px;
    font-weight:bold
}

.row{
    margin-top: 30px;
    margin-bottom: 25px;
}

    .behclick-panel  .list-group {
            margin-bottom: 0px;
        }
        .behclick-panel .list-group-item:first-child {
            border-top-left-radius:0px;
            border-top-right-radius:0px;
        }
        .behclick-panel .list-group-item {
            border-right:0px;
            border-left:0px;
        }
        .behclick-panel .list-group-item:last-child{
            border-bottom-right-radius:0px;
            border-bottom-left-radius:0px;
        }
        .behclick-panel .list-group-item {
            padding: 5px;
        }
        .behclick-panel .panel-heading {
            /*              padding: 10px 15px;
                            border-bottom: 1px solid transparent; */
            border-top-right-radius: 0px;
            border-top-left-radius: 0px;
            border-bottom: 1px solid darkslategrey;
        }
        .behclick-panel .panel-heading:last-child{
            /* border-bottom: 0px; */
        }
        .behclick-panel {
            border-radius: 0px;
            border-right: 0px;
            border-left: 0px;
            border-bottom: 0px;
            box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
        }
        .behclick-panel .radio, .checkbox {
            margin: 0px;
            padding-left: 10px;
        }
        .behclick-panel .panel-title > a, .panel-title > small, .panel-title > .small, .panel-title > small > a, .panel-title > .small > a {
            outline: none;
        }
        .behclick-panel .panel-body > .panel-heading{
            padding:10px 10px;
        }
        .behclick-panel .panel-body {
            padding: 0px;
        }
         /* unvisited link */
        .behclick-panel a:link {
            text-decoration:none;
        }

        /* visited link */
        .behclick-panel a:visited {
            text-decoration:none;
        }

        /* mouse over link */
        .behclick-panel a:hover {
            text-decoration:none;
        }

        /* selected link */
        .behclick-panel a:active {
            text-decoration:none;
        }

       h1, h2, h3, h4, h5, h6 
       {
        font-family: 'Corben', Georgia, Times, serif;
       }

      p, div 
      {
       font-family: 'Nobile', Helvetica, Arial, sans-serif;
      }

    .hideOverflow
    {
        overflow:hidden;
        white-space:nowrap;
        text-overflow:ellipsis;
    }

    </style>

</head>

<style>
</style>

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

    <!-- Page Content -->
<div class="container-fluid">
    <div class="row">




        <div class="container-fluid">
            <div id="custom_carousel"   class="carousel slide" data-ride="carousel" data-interval="2500">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                     <div class="item active">
                         <div class="container">
                             <div class="row">
                             <div class="col-md-4"><img style="max-height:300px;max-width:300px;" src="./np_1.jpg" class="img-responsive"></div>
                                 <div class="col-md-8">
                            <h1>Pink</h1>
                            <p>Deepak is a lawyer suffering from bipolar disorder who experiences frequent mood swings. One night, Rajveer and his friends get drunk and try to molest Miss Arora and her two roommates leading to an accident. The film revolves around how Deepak fights the girls' case against these influential boys.</p>
                                </div>
                             </div>
                        </div>            
                     </div> 
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4"><img style="max-height:300px;max-width:300px;" src="./np_2.jpg" class="img-responsive"></div>
                        <div class="col-md-8">
                            <h1>Sully</h1>
                            <p>On Thursday, January 15th, 2009, the world witnessed the "Miracle on the Hudson" when Captain Sully glided his disabled plane onto the frigid waters of the Hudson River, saving the lives of 155 aboard. However, even as Sully was being heralded by the public and the media for his unprecedented feat of aviation skill, an investigation was unfolding that threatened to destroy his reputation and his career.</p>
                        </div>
                    </div>
                </div>            
            </div> 
           
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4"><img  style="max-height:300px;max-width:300px;" src="./np_3.jpg" class="img-responsive"></div>
                        <div class="col-md-8">
                            <h1>Oppam</h1>
                            <p>Jayaraman is blessed with great sense even though he is blind.He works as an elevator operator where many reputed people live and once accidentally, he witnessed a murder and he is charged guilty. The plot shows how a blind person could reveal the real killer and prove his innocence with his great power of sense.</p>
                        </div>
                    </div>
                </div>           
            </div> 

            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4"><img style="max-height:200px;max-width:300px;" src="./np_4.jpg" class="img-responsive"></div>
                        <div class="col-md-8">
                            <h1>Mungaru Male 2</h1>
                            <p>Mungaru Male 2 is the sequel to the 2006 blockbuster movie Mungaru Male. This romantic movie features Golden star Ganesh and Crazy star V.Ravichandran for the first time together along with newbie Neha shetty, Aindrita Ray, Shilpa Manjunath, Ravishankar, Sadhu kokila and others.</p>
                        </div>
                    </div>
                </div>           
            </div> 

             
        <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        <div class="controls">
            <ul class="nav">
                <li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#"><img style="max-height:50px;max-width:50px;" src="./np_1.jpg"><small>Pink</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="1"><a href="./movies"><img style="max-height:50px;max-width:50px;" src="./np_2.jpg"><small>Sully</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="2"><a href="#"><img style="max-height:50px;max-width:50px;" src="./np_3.jpg"><small>Oppam</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="3"><a href="#"><img style="max-height:50px;max-width:50px;" src="./np_4.jpg"><small>Mungaru Male 2</small></a></li>
                
            </ul>
        </div>
    </div>
    <!-- End Carousel -->
    

    </div>
</div>
      
<div class="container">
    <div class="row">    
      

       <div class="col-md-3">
            <a href="https://www.bookmyshow.com">
                <img style="max-height:270px;max-width:250px;margin-right:-150px" src="./ticket.jpg"></img>
            </a>
            <p style="letter-spacing:3px" >BOOK YOUR TICKETS NOW!</p>
        </div>
        

        <div style="margin-left:90px" class="col-md-2">
            <a href="http://www.pvrcinemas.com">
                <img style="max-height:130px;max-width:250px;margin-right:-150px" src="./ticket2.jpg"></img>
            </a>
           
        </div>

        <div style="margin-left:60px" class="col-md-2">
            <a href="http://www.inoxmovies.com.com">
                <img style="max-height:130px;max-width:250px;margin-right:-150px" src="./ticket3.jpg"></img>
            </a>
           
        </div>

        <div style="margin-left:80px" class="col-md-2">
            <a href="http://www.paytym.com/movies">
                <img style="max-height:125px;max-width:250px;margin-right:-150px" src="./ticket4.jpg"></img>
            </a>
           
        </div>
      
    </div>
</div>

<div class="container">
    <div class="row">    
   
         <div class="col-md-9">
        
            <table  class="table table-striped">
                  <thead>
                  <tr class="info">
                      <th>Name</th>
                      <th>Language</th>
                      <th>Genre</th>
                      <th>Rating</th>                                          
                  </tr>
              </thead>   
              <tbody>
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
                    $query = 'select * from movies where rdate between date_sub(curdate(),interval 60 day) and curdate();';
                    //echo $query;
                    $result = mysqli_query($link,$query);
                if (!$result)
                        {
                            echo "Could not connect to movies";
                            exit();
                        }
                 while ($row = mysqli_fetch_array($result))
                    {
                    $name = $row['name'];
                    $language = $row['language'];
                    $genre = $row['genre'];
                    $rating = $row['rating'];
                    
                    echo "<tr>
                        <td>$name</td>
                        <td>$language</td>
                        <td>$genre</td>
                        <td>$rating/10</td>                                        
                        </tr>";
                    }
                ?>
              </tbody>
            </table>
            </div>


        <div class="col-md-3">
            <div style="margin-left:80px" id="accordion" class="panel panel-default behclick-panel">

                <div class="panel-heading">
                    <h3 class="panel-title">FILTER  BY</h3>
                </div>

                <div class="panel-body" >
                    <div class="panel-heading " >
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse0">
                                <i class="indicator fa fa-caret-down" aria-hidden="true"></i>    Language
                            </a>
                        </h4>
                    </div>

                    <div id="collapse0" class="panel-collapse collapse in" >
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        English
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox" >
                                    <label>
                                        <input type="checkbox" value="">
                                        Hindi
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="checkbox" value="">
                                        Kannada
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="checkbox" value="">
                                        Tamil
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="checkbox" value="">
                                        Telgu
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="checkbox" value="">
                                        Malayalam
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                     
                    <div class="panel-heading " >
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse1">
                                <i class="indicator fa fa-caret-down" aria-hidden="true"></i>    Genre
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in" >
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Action
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox" >
                                    <label>
                                        <input type="checkbox" value="">
                                        Adevnture
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="checkbox" value="">
                                        Animation
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="checkbox" value="">
                                        Comedy
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="checkbox" value="">
                                        Crime
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="checkbox" value="">
                                        Drama
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="checkbox" value="">
                                        Horror
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="checkbox" value="">
                                        Romance
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="checkbox" value="">
                                        Thriller
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="panel-heading" >
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-down" aria-hidden="true"></i>    Rating</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse in">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        8 - 10
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox" >
                                    <label>
                                        <input type="checkbox" value="">
                                        6 - 8
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="checkbox" value="">
                                        4 - 6
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="checkbox"  >
                                    <label>
                                        <input type="checkbox" value="">
                                        Less than 4
                                    </label>
                                </div>
                            </li>
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
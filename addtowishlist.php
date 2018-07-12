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
  margin-top: 30px;
  margin-bottom: 10px
}
h3{
    margin-top: 2cm;
}
</style>
</head>

<body>

    <?php
    session_start();
    if ($_GET['mid']!=null && isset($_SESSION['uid']))
    {
    $link = mysqli_connect("localhost","root","password");
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
                        
    $mid = $_GET['mid'];
    $uid = $_SESSION['uid'];
    $query = 'select * from mwishlist where uid ='.$uid.';';
    //echo $query;
    $result = mysqli_query($link,$query);
    if (!$result)
        {
        echo "Could not connect to mwishlist";
        exit();
        }
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
    </nav>

    <div class="container">

        <div class="row">

            <div class="col-md-8">
                <h3 margin="top:50px"> Add To Wishlist </h3>
            </div>
        </div>
        
        <?php
        echo "<form method=\"POST\" action=\"addtowishlistutil.php?uid=$uid&mid=$mid\">"; 
        ?>
            <div class="form-group">
            
            <div class = "row">
                    <input type="text" class="form-control" name="wishlist" placeholder="List Name" />         
            </div>
            
            <div class="row">
                <div style="float:left" class = "col-md-3">
                    <input type="submit" name="submit" style="margin-left:10px"  class="btn btn-default btn-success" />
                </div>
            </div>

            </div>
        </form>
        
        
        <div class = "col-md-10">
                        <ul class="list-group">
                            <h3> Your Current Wishlists </h3>
                            <table class="table">
                                <tbody>
                                <?php
                                while($row = mysqli_fetch_array($result))
                                {
                                $listname =   $row['listname'];                                 
                                echo "<tr>
                                    <td><h4>$listname</td>
                                    </tr>";
                                }
                                ?>
                                </tbody>
                            </table>
                        </ul>
                    </div>
        
    </div>

             

        

     
              
    
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

   

</body>

</html>

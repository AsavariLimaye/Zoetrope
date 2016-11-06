<?php
session_start();
echo $_POST['submit'];
$review= $_POST['review'];
$rating =  $_POST['rating'];

$servername = "localhost";
$username = "root";
$password = "Asavari2";
$database = "zoetrope";

$con = mysqli_connect($servername,$username,$password,$database);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if (isset($_POST['submit']))
{
$uid = $_SESSION['uid'];
$tvid = $_GET['tvid'];
echo $uid,$tvid,$review,$rating;
$query1 = "insert into tvshowrating values ($uid,$tvid,$rating);";
$query2 = "insert into tvreview values ($uid,$tvid,'$review');";
echo $query1;
echo $query2;
mysqli_query($con,$query1);
mysqli_query($con,$query2);

$query3 = "select pid from tvcast where tvid=$tvid;";
echo  $query3;
$cast = mysqli_query($con,$query3);

while ($onecast = mysqli_fetch_array($cast))
    {
        $pid = $onecast['pid'];
        $querygetperson = "select * from favactor where pid=$pid;";
        echo $querygetperson;
        $castisfav = mysqli_query($con,$querygetperson);
        if (!empty($castisfav))
            {
                $queryupdatepoints = "update favactor set points = points + $rating where pid=$pid and uid=$uid;";
                echo $queryupdatepoints;
                mysqli_query($con,$queryupdatepoints);
            }
        else
            {
                $queryinsertactor = "insert into favactor values ($uid,$pid,$rating);";
                echo $queryinsertactor;
                mysqli_query($con,$queryinsertactor);
            }
    }


header("Location: index.php");
   exit;
}
  

?>
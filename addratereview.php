<?php
session_start();
echo "hi";
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
$mid = $_GET['mid'];
echo $uid,$mid,$review,$rating;
$query1 = "insert into movierating values ($uid,$mid,intval('$rating'));";
$query2 = "insert into mreview values ($uid,$mid,'$review');";
echo $query1;
echo $query2;
mysqli_query($con,$query1);
mysqli_query($con,$query2);
//header("Location: index.php");
//   exit;
}
  

?>
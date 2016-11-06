<?php
//echo "hi";
//echo $_POST['submit'];
$servername = "localhost";
$username = "root";
$password = "Asavari2";
$database = "zoetrope";

$con = mysqli_connect($servername,$username,$password,$database);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
echo $_POST['wishlist'];
if (isset($_POST['submit']))
{
$uid = $_GET['uid'];
$tvid = $_GET['tvid'];
$listname = $_POST['wishlist'];
$query = "insert into tvwishlist values ($uid,'$listname',$tvid);";
echo $query;
mysqli_query($con,$query);
//header("Location: index.php");
//   exit;
}
  

?>
<?php
$servername = "localhost";
$username = "root";
$password = "Asavari2";
$database = "zoetrope";

$passwordn = $_POST['password'];
$password2n =  $_POST['password2'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$con = mysqli_connect($servername,$username,$password,$database);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if (isset($_POST['submit']))
{
$query = "insert into users (email,firstname,secondname,password) values ('$email','$fname','$lname','$passwordn');";
echo $query;
mysqli_query($con,$query);
header("Location: index.php");
   exit;
}
  

?>
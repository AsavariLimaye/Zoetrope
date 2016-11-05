<?php


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
 session_start();
if (!empty($_POST['username']))
    {
        $result =  mysqli_query($con,"select * from user where email = '$_POST[username]' AND lastName = '$_POST[password]'") or die ();
        //echo $_POST['username'];
        //echo $_POST['password'];
       $row = mysqli_fetch_array($result);
       
        if (!empty($row['email']) AND !empty($row['lastName']))
        {
            $_SESSION['username'] = $row['lastName'];
            //echo "Successfully Logged in :D";
            header("Location: index.php");
            exit;
        }
        else {
        echo 'Wrong user id or password' ; 
        }
    }
}
  

?>
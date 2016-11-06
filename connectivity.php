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
echo $_POST['submit'];
echo $_POST['password'];
echo $_POST['username'];
if (isset($_POST['submit']))
{
session_start();
if (!empty($_POST['username']))
    {
        echo "select * from users where email = '$_POST[username]' AND password = '$_POST[password]';";
        $result =  mysqli_query($con,"select * from users where email = '$_POST[username]' AND password = '$_POST[password]';");
        echo $_POST['username'];
        echo $_POST['password'];
       $row = mysqli_fetch_array($result);
       
        if (!empty($row['email']) AND !empty($row['password']))
        {
            $_SESSION['username'] = $row['email'];
            $_SESSION['uid']= $row['uid'];
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
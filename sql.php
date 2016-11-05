<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "Asavari2";


$conn = new mysqli($servername, $username, $password);

 Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
</body>
</html>
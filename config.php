<?php
#hostname = server_host like localhost
#username = your db username
#password = your db password
#database = your database name
// $connect = mysqli_connect("hostname", "username", "password", "database") 
$hostname = "localhost";
$username = "root";
$password = "root";
$database = "subscribers";
$connect = mysqli_connect($hostname, $username, $password, $database) or die("Failed to connect ");
?>
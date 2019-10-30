<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Portfolio';

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    echo "Connection to database error".mysqli_connect_error()."<br>";
}

?>

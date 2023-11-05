<?php
$username="root";
$password="";
$host="localhost";
$db="ebook";
$connect= mysqli_connect($host,$username,$password,$db);
if($connect)
{
    echo "connection successfully";
}
else{
    echo "connection failed ".mysqli_error($connection);
}
?>
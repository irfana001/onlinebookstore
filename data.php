<?php

include 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];


$sql = "INSERT INTO `student`( `name`, `email`)
                            VALUES('$name','$email')";

$result = mysqli_query($connect,$sql);

if($result)
{
    echo "data inserted";
}
else
{
    echo "data not inserted".mysqli_error($connect);
}

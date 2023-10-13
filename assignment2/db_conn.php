<?php
//database connection
$mysqli=new mysqli("localhost", "root", "", "UniBnB");

if (mysqli_connect_error())
{
    printf("connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>

<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "filesystem");
if(!$conn)
{
    echo "not";
}
else{
    // echo "connect";
}
?>
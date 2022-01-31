<?php
$servername="localhost";
$username="root";
$password="";
$dbname="wtcta";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "Connection OK";
  
}
else
{
    echo "Connection NOT OK ".mysqli_connect_error();
}
?>
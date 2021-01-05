<?php
require_once "connect.php";
$con=new mysqli("localhost","root",null,"gymprogresionapp");

if($con->connect_errno!=0)
{
    echo "Error: ".$con->connect_errno . "Opis" . $con->connect_error;
}
else{
    $login=$_POST['username'];
    $haslo=$_POST['password'];
}
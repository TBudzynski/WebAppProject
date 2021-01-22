<?php

$con=new mysqli("localhost","root",null,"gymprogresionapp");

session_start();

$username = $_SESSION['username'];
$password = $_POST['password'];
$checkbox = $_POST['Deletea'];

$logcon="SELECT * FROM  usersdata WHERE username = '$username' ";
if($rezultat=@$con->query($logcon))

{

$ilu_userow = $rezultat->num_rows;
if($ilu_userow>0){
$wiersz=$rezultat->fetch_assoc();


    if(password_verify($password,$wiersz['password']) && $checkbox = "delete" ){
       
$logdel="DELETE FROM  `usersdata` WHERE username = '$username' ";
     
     
    header('Location: index.php');
    }
else 
{
    echo "You write a bad password! ";
}


}
}


?>
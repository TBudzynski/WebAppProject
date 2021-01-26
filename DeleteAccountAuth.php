<?php

$con=new mysqli("localhost","root",null,"gymprogresionapp");

session_start();

$username = $_SESSION['username'];
$password = $_POST['password'];
$checkbox = $_POST['Delete'];

$logcon="SELECT * FROM  usersdata WHERE username = '$username' ";
if($rezultat=@$con->query($logcon))
{
$ilu_userow = $rezultat->num_rows;
if($ilu_userow>0){
$wiersz=$rezultat->fetch_assoc();

if(password_verify($password,$wiersz['password']) &&  isset($_POST['Delete']) ){
       
$logdel="DELETE  FROM  `usersdata` WHERE username = '$username' ";
$logdelcalc="DELETE  FROM  `calorycalc` WHERE username = '$username' ";
$rezultat=@$con->query($logdel);
$rezultatcalc=@$con->query($logdelcalc);
if($rezultat>0 && $rezultatcalc>0)
    {
     header('Location: index.php');
    }
if($rezultat==0 && $rezultatcalc==0)
    {
    header('Location: DeleteAccount.php');
    }
}
else if (!password_verify($password,$wiersz['password'])) {
    header('Location: DeleteAccount.php');
    echo (" Bad password!");
}
else if (!isset($_POST['Delete']))
{
    header('Location: DeleteAccount.php');
}
else 
{
    echo "You write a bad password! ";
}


}
}


?>
<?php


$con=new mysqli("localhost","root",null,"gymprogresionapp");

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$logcon="SELECT * FROM  usersdata WHERE username = '$username' ";

$username=htmlentities($username,ENT_QUOTES,"UTF-8");
if($rezultat=@$con->query($logcon))

{
$ilu_userow = $rezultat->num_rows;
if($ilu_userow>0){
$wiersz=$rezultat->fetch_assoc();
$_SESSION['username']=$wiersz['username'];

    if(password_verify($password,$wiersz['password'])){
        echo ("hasla sa ok");
     
     $rezultat->free_result();
setcookie('username',$row['username']);
    header('Location: newMainPage.php');
    }

    else {
$_SESSION['blad']='<span style = "color:red">Uncorrect username or password!</span>';
  #      echo ("twoje haslo ktore wpisales to " .$password);
       
header('Location: log.php');
    }
}

else if($ilu_userow=0){
    $_SESSION['blad']='<span style = "color:red">Uncorrect username or password!</span>';
  header('Location: log.php');
   

}
}


?>
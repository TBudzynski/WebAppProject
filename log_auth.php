<?php

// //require_once "lib/MysqliDb.php";
// $error_msg = "";
// if (!isset($_COOKIE['username'])){
// if(isset($_POST['submit'])){
//   $con= mysqli_connect("localhost","root",null,"gymprogresionapp");
//   $user_username = mysqli_real_escape_string($con,trim($_POST['username']));
//   $user_password = mysqli_real_escape_string($con,trim($_POST['password']));
//   //$password = $_POST['p;ssword'];
// echo "2";
//   if(!empty($user_username) && !empty($user_password)){
//   $logcon="SELECT username    FROM  usersdata WHERE username = '$user_username' AND password = SHA('$user_password')";
//   $data=mysqli_query($con,$logcon);
//   //if(password_verify($password,$wiersz['password'])){
//   if(mysqli_num_rows($data) == 1)
//   {
//     $row = mysqli_fetch_array($data);
//    // setcookie('user_id',$row['user_id']);
//     setcookie('username',$row['username']);
//   //  $home_url='http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']). '/index.php';
//     header('Location: newMainPage.php');
//   }
//   else{
//     $error_msg='wrong password';
//   }
// }
// else {
//   $error_msg = 'You must give name';
// }
// }
// }


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
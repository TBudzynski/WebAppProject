<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
 <html>
 <head>
 <title>Serwis ABC</title>
 <meta http-equiv=content-type content="text/html; charset=iso-8859-2">
 <meta http-equiv="Content-Language" content="pl">
 </head>
 
 <body>

<?php
session_start();

    if(isset($_POST['email'] )&& isset($_POST['password'])&& isset($_POST['nameu'])&& isset($_POST['surname'])&& isset($_POST['username'])&& isset($_POST['gender']))
    {
    $everythingisokay=true;
    $name = $_POST['nameu'];
    $surname = $_POST['surname'];
    $gender= $_POST['gender'];
    $email = $_POST['email'];
    $username = $_POST['username'];
   // $password = $_POST['password'];
    $password= password_hash($_POST['password'],PASSWORD_ARGON2ID);
    $logcon="SELECT * FROM  usersdata WHERE username = '$username' ";
  
    if($username==$logcon)
    {
        $everythingisokay==false;
        echo "Podany username juz istnieje";
    }
}
    else if($ilu_userow=0)
    {
        $everythingisokay==true;
    }

    if((strlen($username)<3) || (strlen($username))>20)
    {
        $everythingisokay=false;
        $_SESSION['e_nick']="Nick must be include from 3 to 15 chars";
    }
   



    if($everythingisokay==true)
    {
        $con= new mysqli("localhost","root",null,"gymprogresionapp");

        if($con->query("INSERT INTO `usersdata` (`name`,`surname`,`gender`,`email`,`username`,`password`) VALUES ('$name','$surname','$gender',' $email','$username','$password')"))
        {
            
           header('Location: logporej.php');
    
        }
        else
        {
            echo "error: " .$con->error;
        }
    
        } 
   
    if(isset($_SESSION['e_nick']))
    {
        echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
        unset($_SESSION['e_nick']);
    }
   
?>

 </body> 
 </html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
 <html>
 <head>
 <title>Serwis ABC</title>
 <meta http-equiv=content-type content="text/html; charset=iso-8859-2">
 <meta http-equiv="Content-Language" content="pl">
 </head>
 
 <body>

<?php
/*
   class Auth {
$db= MysqliDb::getInstance();
$db->where("username", $username);
$db->orWhere("email",$email);
$row = $db->getOne("users");

if($row !== null)
{
    if($row != null)
    {
        if(strcasecmp($username, $row["username"]) === 0)
        $err_message = "This username is already taken";
    }
    $err_message="This username or email is already taken";
    return false;
}
*/
   

session_start();
    if(isset($_POST['email'] )&& isset($_POST['password'])&& isset($_POST['nameu'])&& isset($_POST['surname'])&& isset($_POST['username'])&& isset($_POST['sex']))
    {
    $everythingisokay=true;
    $name = $_POST['nameu'];
    $surname = $_POST['surname'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];
    $username = $_POST['username'];
   // $password = $_POST['password'];
    $password= password_hash($_POST['password'],PASSWORD_ARGON2ID);

    if((strlen($username)<3)|| (strlen($username))>15)
    {
        $everythingisokay=false;
        $_SESSION['e_nick']="Nick must be include from 3 to 15 chars";
    }



    if($everythingisokay==true)
    {
        $con= new mysqli("localhost","root",null,"gymprogresionapp");

        if($con->query("INSERT INTO `usersdata` (`name`,`surname`,`sex`,`email`,`username`,`password`) VALUES ('$name','$surname','$sex',' $email','$username','$password')"))
        {
            
           header('Location: logporej.php');
    
        }
        else
        {
            echo "error: " .$con->error;
        }
    
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
<?php
session_start();
$newpassword=$_POST['passwordnew'];
$newpassword2=$_POST['passwordnew2'];
$password=$_POST['password'];
$username=$_SESSION['username'];

$con= new mysqli("localhost","root",null,"gymprogresionapp");
$logcon="SELECT * FROM  usersdata WHERE username = '$username' ";



if(isset($password) && isset($newpassword) )
{
  

if($rezultat=@$con->query($logcon))

{
        $ilu_userow = $rezultat->num_rows;
        if($ilu_userow>0){
        $wiersz=$rezultat->fetch_assoc();
        $_SESSION['username']=$wiersz['username'];

            if(password_verify($password,$wiersz['password']) && ($newpassword==$newpassword2)){
                $newpassword= password_hash($newpassword,PASSWORD_ARGON2ID);
                if($con->query("UPDATE `usersdata` 
                SET `password` = '$newpassword' 
                WHERE `username`='$username' "))  
                
                {
                    header('Location: newMainPage.php');
                }
            
            }
            else if (!password_verify($password,$wiersz['password']))
            {
                $_SESSION['blad']='<span style = "color:red">These passwords are different!</span>';
                header('Location: ChangePassword.php');
               
            }
            else if( $newpassword!=$newpassword2)
            {
                $_SESSION['blad']='<span style = "color:red">!</span>';
                header('Location: ChangePassword.php');
            }
}
}




}


?>
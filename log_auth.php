<?php
require_once "lib/MysqliDb.php";
$con=new mysqli("localhost","root",null,"gymprogresionapp");
$db=new MysqliDb("localhost","root",null,"gymprogresionapp");

session_start();
//$login - $db ->get(())
//$password=$_GET['password'];
/*$db->where("username", $username);
$row = $db -> getOne(("usersdata"));
if($row === null)
{
    $err_message = "invalid username";
    return false;
}*/

if(password_verify($password,$row[password_hash($_POST['password'],PASSWORD_ARGON2ID)]));
{
    header('Location: PageAfterLogin.php');
    echo "Wszystko ok";
}
?>
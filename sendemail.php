
    <?php

$User_email = $_POST['email'];
  
function passwordGenerator($length=8)
{
$uppercase = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'W', 'Y', 'Z');

$lowercase = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'w', 'y', 'z');

$number = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

$password = NULL;

for ($i = 0; $i <$length ; $i++) {

    $password .= $uppercase[rand(0, count($uppercase) - 1)];
   
    $password .= $lowercase[rand(0, count($lowercase) - 1)];
   
    $password .= $number[rand(0, count($number) - 1)];
   
   }
   return substr($password, 0, $length);
  
}
$myPassword = passwordGenerator(8);
//wyslanie
require_once('class.phpmailer.php');    
require_once('class.smtp.php'); 
   
$mail = new PHPMailer();
$mail->IsHtml(false); //format wiadomości jeśli true=HTML, false=TXT
$mail->CharSet = "utf-8";
$mail->PluginDir = "/var/www/phpmailer/";
$mail->From = "sportprogressapp@gmail.com"; // od
$mail->FromName = "SportGymApp"; //nazwa 
//$mail->AddReplyTo('budzynskitomasz99@gmail.com', 'BUDZY');
$mail->Host = "smtp.gmail.com"; //adres gmaila ;)
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Port = 587; //port gmaila
$mail->Mailer = "smtp"; 
$mail->Username = "sportprogressapp@gmail.com";//nazwa admina na poczcie
$mail->Password = "As145236";//hasło admina do konta SMTP
$mail->SMTPAuth = true;
$mail->SetLanguage("pl", "language/");
$mail->setFrom('sportprogressapp@gmail.com','SportProgressApp');
$mail->addAddress($User_email);
$mail->AddReplyTo('sportprogressapp@gmail.com');
$mail->Subject='Recover your password';
$mail->Body='Your new password is '.$myPassword;


$passwordHash= password_hash($myPassword,PASSWORD_ARGON2ID);
$con= new mysqli("localhost","root",null,"gymprogresionapp");
if($con->query("UPDATE `usersdata` 
SET `password` = '$passwordHash' 
WHERE `email`='$User_email' "))     


 if($mail->Send())    //sprawdzenie wysłania, jeśli wiadomość została pomyślnie wysłana
    {          
    header('Location: index.php')   ;         
    echo 'E-mail został wysłany'; //wyświetl ten komunikat
    }            
else    //w przeciwnym wypadku
    {           
    echo 'E-mail nie mógł zostać wysłany';    //wyświetl następujący
    }

    ?>

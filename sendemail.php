
    <?php
    $header = "From: toomoo19@wp.pl \nContent-Type:".
    ' text/plain;charset="UTF-8"'.
    "\nContent-Transfer-Encoding: 8bit";
$email = $_POST['exampleemail'];
$subject="You would like to receive your password?";
$message="Your password is";

mail($email, $subject, $message,$header);
    ?>

<?php
require 'config.php';
require 'db_config.php';
session_start();

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function checkUser($username, $password, $connection)
{
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if (password_verify($password, $row['password'])) {
            return (int)$row['id_user'];
        }
    } else {
        return false;
    }

}


if (isset($_POST['submit']) and isset($_POST['ime'])) {

    $username = $_POST['ime'];
    $password = $_POST['lozinka'];
    $connection = databaseConnect();

    if (!checkUser($username, $password, $connection)) {
        header("Location:index.php?e=1");
        die();
    }

    $_SESSION['id_user'] = checkUser($username, $password, $connection);
    $id_user = $_SESSION['id_user'];
    setcookie('success', md5(time()+strtotime("3 days")), strtotime("5 minutes"), "/","",true,true);

    $sql = "INSERT INTO log(id_user, date_time)
            VALUES ('$id_user',now())";
    mysqli_query($connection, $sql) or die(mysqli_error($connection));


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();                                                        //Send using SMTP
        //$mail->Host = "smtp.mail.yahoo.com ";                                         //Set the SMTP server to send through
        $mail->Host = 'smtp.gmail.com';                                         //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                                 //Enable SMTP authentication
        $mail->Username = 'sender mejl here';                              //SMTP username
        $mail->Password = 'password for sender mejl; here';                                //SMTP password

        $mail->SMTPSecure = "tls";                                              //Enable implicit TLS encryption
        $mail->Port = 587;                                                      //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('lpbudgeting456@gmail.com', "LP Budgeting");
        $mail->addAddress('address for receiver', 'receiver name');                                  //Add a recipient

        //Content
        $mail->isHTML(true);                                                            //Set email format to HTML
        $mail->Subject = 'Email verification from LP Budgeting';

        $date_time = date("d-m-Y H:i:s");

        $email_template = "
            <h1>Click the link below to verify your account with LP Budgeting</h1>
            <h3>Hello receiver name you have registered with LP Budgeting on $date_time with your email account $email</h3>
            <h4>Verify your email address to Login with the below given link</h4>
            <br><br>
            <h1><a href='http://localhost/NAPREDNO_WEB_PROGRAMIRANJE/klk2_vezba/newImage.php'>Click me to verify</a></h1>
        ";
        $mail->Body = $email_template;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}

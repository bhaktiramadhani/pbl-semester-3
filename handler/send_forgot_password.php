<?php
require '../config/koneksi.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if (!isset($_POST['gmail'])) {
    header('Location: ../forgot-password.php');
}

// get gmail
$email = $_POST['gmail'];
// random token
$token = hash("sha256", bin2hex(random_bytes(16)));
// set jam wita dan membuat expired token
date_default_timezone_set('Asia/Makassar');
$expired = date("Y-m-d H:i:s", strtotime("+30 minutes"));

$query = "UPDATE users SET reset_token = '$token', reset_token_exp = '$expired' WHERE email = '$email'";

$result = mysqli_query($koneksi, $query);


if (mysqli_affected_rows($koneksi) > 0) {
    header('Location: ../forgot-password.php?pesan=silahkan cek email anda!');
} else {
    header('Location: ../forgot-password.php?pesan=akun anda tidak ada!');
}

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'botmailbhakti@gmail.com';                     //SMTP username
    $mail->Password   = 'akvhdwuorcqobvrc';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('botmailbhakti@gmail.com', 'Chemaraya');
    $mail->addAddress($email);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Reset Password From Chemaraya';
    $mail->Body    = '
                        <h1>Click the link below to reset your password</h1> <br> <a href="http://localhost/chemaraya/handler/reset-password.php?email=' . $email . '&token=' . $token . '">Reset Password</a>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

class ForgotPassword extends Controller
{

    public function index()
    {
        $data['title'] = "Forgot Password";
        $this->view('templates/header', $data);
        $this->view('forgotpassword/index');
        $this->view('templates/footer');
    }

    public function send()
    {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        if (!isset($_POST['email'])) {
            header('Location: ../ForgotPassword');
            die;
        }

        // get gmail
        $email = $_POST['email'];
        // random token
        $token = hash("sha256", bin2hex(random_bytes(16)));
        // set jam wita dan membuat expired token
        date_default_timezone_set('Asia/Makassar');
        $expired = date("Y-m-d H:i:s", strtotime("+1 hours"));


        $data = [
            'email' => $email,
            'token' => $token,
            'token_exp' => $expired
        ];

        if ($this->model('User_model')->resetPassword($data) > 0) {
            Flasher::setFlash('reset password', 'reset password berhasil dikirim ke email anda silahkan cek email!', 'success');
            header('Location: ' . BASEURL . '/login');
        } else {
            Flasher::setFlash('reset password', 'reset password gagal email anda tidak terdaftar!', 'error');
            header('Location: ' . BASEURL . '/ForgotPassword');
            exit;
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
            $mail->Body    = '<h1>Click the link below to reset your password</h1>
                                <br>
                                <a href="' . BASEURL . '/ForgotPassword/reset_password/' . $email . '/' . $token . '">Reset Password</a>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public function reset_password($email, $token)
    {
        $user = $this->model('User_model')->getUserByEmail($email);
        if (!$user) {
            Flasher::setFlash('email tidak ditemukan', 'silahkan masukkan link yang valid!', 'error');
            header('Location: ' . BASEURL . '/ForgotPassword');
            exit;
        }

        if ($user['token'] !== $token) {
            Flasher::setFlash('token tidak ditemukan', 'silahkan masukkan link yang valid!', 'error');
            header('Location: ' . BASEURL . '/ForgotPassword');
            exit;
        }

        $data['title'] = "Reset Password";
        $data['email'] = $email;
        $this->view('templates/header', $data);
        $this->view('forgotpassword/reset_password', $data);
        $this->view('templates/footer');
    }

    public function verify_reset_password()
    {
        $password = htmlspecialchars($_POST['password']);
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'password' => $password_hash,
            'email' => $_POST['email']
        ];

        if ($this->model('User_model')->editPassword($data) > 0) {
            Flasher::setFlash('reset password', 'reset password berhasil silahkan login', 'success');
            header('Location: ' . BASEURL . '/login');
        } else {
            Flasher::setFlash('reset password', 'reset password gagal', 'error');
            header('Location: ' . BASEURL . '/login');
            exit;
        }
    }
}

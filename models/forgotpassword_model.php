<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class Forgotpassword_Model extends Model
{

  function __construct()
  {
    parent::__construct();
    Session::init();
  }
  // $BASE_URL=echo URL;
  public function verifyemail($data){
    $sql=$this->db->prepare("SELECT email FROM tbl_users WHERE email=:email AND status='Open' ");
    $sql->execute(array(
      ':email'=>$data['email'],
    ));
    $result=$sql->fetch();
    $rows=$sql->rowCount();
    if($rows > 0){
      //  Session::set('cooperative',$_POST['cooperative']);
      $message="User successfully found";
      $found_status="Yes";
      $dat=array('message'=>$message,'found_status'=>$found_status);
      echo json_encode($dat);
    }
    else{
      $message="User not found";
      $found_status="No";
      $dat=array('message'=>$message,'found_status'=>$found_status);
      echo json_encode($dat);
    }
  }
  public function matchemail($data){
    $sql=$this->db->prepare("SELECT * FROM tbl_users WHERE email=:email AND pin=:pin AND status='Open' ");
    $sql->execute(array(
      ':email'=>$data['email'],
      ':pin'=>$data['pin'],
    ));
    $result=$sql->fetch();
    $rows=$sql->rowCount();
    if($rows > 0){
      //  Session::set('cooperative',$_POST['cooperative']);
      $message="User successfully found";
      $found_status="Yes";
      $dat=array('message'=>$message,'found_status'=>$found_status);
      echo json_encode($dat);
    }
    else{
      $message="User not found";
      $found_status="No";
      $dat=array('message'=>$message,'found_status'=>$found_status);
      echo json_encode($dat);
    }
  }
  public function sendemail($data){
    $sql=$this->db->prepare("SELECT * FROM tbl_users WHERE email=:email AND pin=:pin AND status='Open' ");
    $sql->execute(array(
      ':email'=>$data['email'],
      ':pin'=>$data['pin'],
    ));
    $result=$sql->fetch();
    $rows=$sql->rowCount();
    if($rows > 0){
      //  Session::set('cooperative',$_POST['cooperative']);
      $password=$result['password'];
      $fullname=$result['name'];
      // $to      = ''.$data['email'].'';
      // $subject = 'Password Recovery';
      // $message = 'Your Password is '.$password.'. Use This to Login. Thank You For Choosing  Dreamcity HES';
      // $headers = 'From: webmaster@example.com'       . "\r\n" .
      // 'Reply-To: webmaster@example.com' . "\r\n" .
      // 'X-Mailer: PHP/' . phpversion();
      // mail($to, $subject, $message, $headers);


      //Load Composer's autoloader
      require 'vendor/autoload.php';

      //Create an instance; passing `true` enables exceptions
      $mail = new PHPMailer(true);

      try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.elasticemail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'hr@dreamcityhes.com';                     //SMTP username
        $mail->Password   = '1C3DF7FB5653C8E2A817D344119E5461A4F7';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        // Recipients
        $mail->setFrom('hr@dreamcityhes.com', 'DreamcityHES');
        $mail->addAddress(''.$data['email'].'', ''.$fullname.'');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo('hr@dreamcityhes.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Password Reset Code';
        $mail->Body    = '<p>Dear '.$fullname.' your password is <b>'.$password.'</b>.</p><br>
        <p> Please Due to security reasons either delete this email or change your passsword. </p>
        <h4>Thank you for choosing Dreamcity HES </h4>';
        $mail->AltBody = '';

        $mail->send();
        echo '<script type="text/javascript">';
          echo 'alert("Mail Sent successfully");
          window.location.href = "'.URL.'forgotpassword";';
        echo "</script>";

        // echo 'Message has been sent';
      } catch (Exception $e) {
        // $message="Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        // $sent_status="No";
        // $dat=array('message'=>$message,'sent_status'=>$sent_status);
        // echo json_encode($dat);
        echo '<script type="text/javascript">';
          echo 'alert("Mail Could not be sent Mailer Error: '.$mail->ErrorInfo.'");
          window.location.href = "'.URL.'forgotpassword";';
        echo "</script>";
        // echo "";
      }
    }

  }
  public function verifymobile($data){
    $sql=$this->db->prepare("SELECT mobile FROM tbl_users WHERE mobile=:mobile AND status='Open' ");
    $sql->execute(array(
      ':mobile'=>$data['mobile'],
    ));
    $result=$sql->fetch();
    $rows=$sql->rowCount();
    if($rows > 0){
      //  Session::set('cooperative',$_POST['cooperative']);
      $message="User successfully found";
      $found_status="Yes";
      $dat=array('message'=>$message,'found_status'=>$found_status);
      echo json_encode($dat);
    }
    else{
      $message="User not found";
      $found_status="No";
      $dat=array('message'=>$message,'found_status'=>$found_status);
      echo json_encode($dat);
    }
  }
  public function matchmobile($data){
    $sql=$this->db->prepare("SELECT * FROM tbl_users WHERE mobile=:mobile AND pin=:pin AND status='Open' ");
    $sql->execute(array(
      ':mobile'=>$data['mobile'],
      ':pin'=>$data['pin'],
    ));
    $result=$sql->fetch();
    $rows=$sql->rowCount();
    if($rows > 0){
      //  Session::set('cooperative',$_POST['cooperative']);
      $message="User successfully found";
      $found_status="Yes";
      $dat=array('message'=>$message,'found_status'=>$found_status);
      echo json_encode($dat);
    }
    else{
      $message="User not found";
      $found_status="No";
      $dat=array('message'=>$message,'found_status'=>$found_status);
      echo json_encode($dat);
    }
  }

}

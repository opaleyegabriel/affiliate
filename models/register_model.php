<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
  class Register_Model extends Model{
    function __construct(){
      parent::__construct();
      Session::init();
    }
    public function email($data){
      $sql=$this->db->prepare("SELECT email FROM tbl_affiliate_users WHERE email=:email");
      $sql->execute(array(
        ':email'=>$data['email'],
      ));
      $result=$sql->fetch();
      $rows=$sql->rowCount();
      if($rows > 0){
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
    public function mobile($data){
      $sql=$this->db->prepare("SELECT mobile FROM tbl_affiliate_users WHERE mobile=:mobile");
      $sql->execute(array(
        ':mobile'=>$data['mobile'],
      ));
      $result=$sql->fetch();
      $rows=$sql->rowCount();
      if($rows > 0){
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
    public function saveuser($data){
     // print_r($data);
     // exit();

      $sql=$this->db->prepare("INSERT INTO tbl_affiliate_users(cname,email,mobile,password,attached_branchID,nstatus,mypin,referrermobile) VALUES (:name,:email,:mobile,:password,:attached_branchID,:nst,:mpin,:referrermobile)");
      $sql->execute(array(
        ':name'=>$data['name'],
        ':email'=>$data['email'],
        ':mobile'=>$data['mobile'],
        ':password'=>$data['password'],
        ':attached_branchID'=>0,
        ':nst'=>$data['status'],
        ':mpin'=>$data['pin'],
        ':referrermobile'=>$data['referrermobile']
      ));


      $sql1=$this->db->prepare("INSERT INTO tbl_user_info(mobile,address,idcardno,idcardimg,passport) VALUES (:mobile,:add,:idcardno,:idcardimg,:passport)");
      $sql1->execute(array(
        ':mobile'=>$data['mobile'],
        ':add'=>"",
        ':idcardno'=>"",
        ':idcardimg'=>"",
        ':passport'=>""
        ));

            $sql2=$this->db->prepare("INSERT INTO tbl_bank_info(account_number,bank_name,mobile) VALUES (:account_number,:bank_name,:mobile)");
          $sql2->execute(array(
        ':mobile'=>$data['mobile'],
        ':account_number'=>"",
        ':bank_name'=>""
        ));


           $sql3=$this->db->prepare("INSERT INTO tbl_activities(mobile, activities) VALUES (:mobile, :activities)");
      $sql3->execute(array(
        ':mobile'=>$data['mobile'],
        ':activities'=>"Registered On Affiliate Marketing"
        ));

              $to = "somebody@example.com, somebodyelse@example.com";
        $subject = "HTML email";

        $message = '<div class="total">
            <div class="header_section container col-xxl" style="background-color:green; padding:20px;  text-align:center;">
              <h3 class="">DreamCity HES Ltd</h3>
            </div>
            <div class="content_section container col-xxl" style="background-color:white;  padding:20px">
              <p>
                Dear Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

              </p>
            </div>
            <div class="footer_section1 container col-xxl" style="background-color:black; color:#fff; padding:20px;">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>

                <div class="" style="text-align:center;">
                  <h3>Dreamcity HES Ltd</h3>
                  <div class="">
                    <div class="d-flex mr-2">
                      <i class="fa fa-facebook"></i>
                      <i class="fa fa-instagram"></i>
                      <i class="fa fa-twitter"></i>
                    </div>
                  </div>
                </div>
          </div>
        ';

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <hr@dreamcityhes.com>' . "\r\n";
        $headers .= 'Cc: josseanngel@yahoo.com' . "\r\n";

        mail($to,$subject,$message,$headers);
        echo '<script type="text/javascript">';
            echo 'alert("Registration Completeed");
            window.location.href = "'.URL.'index";';
          echo "</script>";










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
         // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
          //$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
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
          $mail->Body    = '
          <div class="total">
            <div class="header_section container col-xxl" style="background-color:green; padding:20px;  text-align:center;">
              <h3 class="">DreamCity HES Ltd</h3>
            </div>
            <div class="content_section container col-xxl" style="background-color:white;  padding:20px">
              <p>
                Dear Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

              </p>
            </div>
            <div class="footer_section1 container col-xxl" style="background-color:black; color:#fff; padding:20px;">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>

                <div class="" style="text-align:center;">
                  <h3>Dreamcity HES Ltd</h3>
                  <div class="">
                    <div class="d-flex mr-2">
                      <i class="fa fa-facebook"></i>
                      <i class="fa fa-instagram"></i>
                      <i class="fa fa-twitter"></i>
                    </div>
                  </div>
                </div>
          </div>

          ';
          $mail->AltBody = '';

          $mail->send();
          echo '<script type="text/javascript">';
            echo 'alert("Registration Complete");
            window.location.href = "'.URL.'index";';
          echo "</script>";

          // echo 'Message has been sent';
        } catch (Exception $e) {
          // $message="Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
          // $sent_status="No";
          // $dat=array('message'=>$message,'sent_status'=>$sent_status);
          // echo json_encode($dat);
          echo '<script type="text/javascript">';
            echo 'alert("Registration Complete");
            window.location.href = "'.URL.'index";';
          echo "</script>";
          // echo "";
        }

      echo '<script type="text/javascript">';
      echo 'alert("Registration Complete ");
      window.location.href = "'.URL.'index";';
      echo "</script>";



      
    }
  }
